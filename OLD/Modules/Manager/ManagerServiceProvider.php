<?php

namespace Edaacil\Modules\Manager;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ManagerServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        // 'Edaacil/Modules/User/Migrations' folder path
        $this->loadMigrationsFrom(__DIR__.'/Migrations');

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/Http/ManagerRoutes.php');

        // Load views from 'Edaacil/Modules/User/Views'
        $this->loadViewsFrom(__DIR__ . '/Resources/Views', 'manager');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {}
}
