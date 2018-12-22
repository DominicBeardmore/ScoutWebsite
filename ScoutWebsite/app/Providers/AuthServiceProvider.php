<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Policies\SuperAdminPolicy;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        \App\User::class => \App\Policies\SuperAdminPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update', 'App\Policies\SuperAdminPolicy@update');
        Gate::define('authorized', 'App\Policies\SuperAdminPolicy@authorized');
    }
}
