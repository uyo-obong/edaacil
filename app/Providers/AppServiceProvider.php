<?php

namespace Edaacil\Providers;

use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Manager;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application webservices.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('BaseRepository',(BaseRepository::class));
        
    }

    /**
     * Bootstrap any application webservices.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
