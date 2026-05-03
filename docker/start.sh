#!/bin/bash
set -e

echo ">> Substituting PORT into Nginx config..."
envsubst '${PORT}' < /etc/nginx/http.d/default.conf > /tmp/default.conf
mv /tmp/default.conf /etc/nginx/http.d/default.conf

echo ">> Caching Laravel config and routes for production..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo ">> Running database migrations..."
php artisan migrate --force

echo ">> Starting Supervisor (Nginx + PHP-FPM)..."
exec /usr/bin/supervisord -c /etc/supervisord.conf
