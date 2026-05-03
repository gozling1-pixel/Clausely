<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force HTTPS for all generated URLs in production.
        // Render terminates TLS at its load balancer and forwards plain HTTP
        // to our container, so without this Laravel would generate http:// URLs
        // and the browser would block them as mixed content.
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
