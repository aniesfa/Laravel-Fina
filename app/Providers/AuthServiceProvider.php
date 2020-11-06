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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
<<<<<<< HEAD
        Gate::define('manage-articles', function($user){
            return $user->roles == "Administrator";
        });

        Gate::define('user-display', function($user){
            return $user->roles == "User";
        });
=======

        //
>>>>>>> 980579bac7eb96edd8082b6673a9344395b87fb6
    }
}
