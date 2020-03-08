<?php

namespace Edaacil\Modules\Client;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ClientServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/Http/ClientRoutes.php');

        // Load views from 'Edaacil/Modules/Client/Views'
        $this->loadViewsFrom(__DIR__ . '/Resources/Views', 'client');

        $this->loadMigrationsFrom(__DIR__.'/Migrations');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {}
}
