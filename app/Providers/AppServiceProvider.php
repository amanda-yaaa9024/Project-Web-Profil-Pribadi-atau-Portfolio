<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if (! $this->app->environment('local')) {
            URL::forceScheme('https');
            // Paksa ASSET_URL menjadi root relatif agar tidak pernah bentrok domain/CORS/HTTP
            Config::set('app.asset_url', '/');
        }
    }
}