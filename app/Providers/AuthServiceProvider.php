<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * This array maps your Eloquent models to their corresponding policies.
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication/authorization services.
     *
     * This method is called within a bootstrapped application and is a great place to register your various container bindings and event listeners.
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Example Gate
        Gate::define('edit-settings', function ($user) {
            return $user->isAdmin;
        });
    }
}
