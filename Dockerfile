# syntax=docker/dockerfile:1
# Production Dockerfile for Clausely (Laravel 13 + PHP 8.3)
# Single-stage build using FrankenPHP-style base for simplicity

FROM php:8.4-fpm-alpine AS base

# Install system dependencies
RUN apk add --no-cache \
    nginx \
    supervisor \
    curl \
    git \
    bash \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libzip-dev \
    icu-dev \
    postgresql-dev \
    oniguruma-dev \
    nodejs \
    npm

# Install PHP extensions Laravel needs
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo \
        pdo_pgsql \
        gd \
        zip \
        intl \
        mbstring \
        bcmath \
        opcache

# Install Composer (PHP's package manager) by copying from the official Composer image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy composer files first and install PHP dependencies
# This is split out so Docker can cache this layer if composer.json doesn't change
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist --no-interaction

# Copy package files and install Node dependencies
COPY package.json package-lock.json ./
RUN npm ci

# Copy the rest of the application
COPY . .

# Finalize Composer autoloader and Node build
RUN composer dump-autoload --optimize --no-dev \
    && npm run build \
    && rm -rf node_modules

# Set up storage and bootstrap/cache directories with correct permissions
RUN chmod -R 775 storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

# Copy our Nginx and Supervisor configuration
COPY docker/nginx.conf /etc/nginx/http.d/default.conf
COPY docker/supervisord.conf /etc/supervisord.conf
COPY docker/start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

# Render expects the app to listen on the port given by the PORT env variable
# We'll set this in our Nginx config
ENV PORT=8080
EXPOSE 8080

CMD ["/usr/local/bin/start.sh"]
