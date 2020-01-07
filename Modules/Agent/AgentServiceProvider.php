<?php

namespace Edaacil\Modules\Agent;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class AgentServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        // 'Haqqman/Modules/User/Migrations' folder path
        $this->loadMigrationsFrom(__DIR__.'/Migrations');

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/Http/AgentRoutes.php');

        // Load views from 'Edaacil/Modules/User/Views'
        $this->loadViewsFrom(__DIR__ . '/Resources/Views', 'agent');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {}
}
