<?php

namespace Edaacil\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'Edaacil\Model' => 'Edaacil\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization webservices.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
