<?php

namespace App\Providers;

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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->registerPolicies();

        // // Define your gates here, for example:
        // Gate::define('admin', function ($user) {
        //     return $user->role->name === 'admin';
        // });

        // Gate::define('operator', function ($user) {
        //     return $user->role->name === 'operator';
        // });
    }
}