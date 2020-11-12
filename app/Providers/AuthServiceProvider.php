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
=======
<<<<<<< HEAD
>>>>>>> 3365f423b9611a4e007e66a73c6179538db30b6c
        Gate::define('manage-articles', function($user){
            return $user->roles == "Administrator";
        });

        Gate::define('user-display', function($user){
            return $user->roles == "User";
        });
<<<<<<< HEAD
=======
=======

        //
>>>>>>> 980579bac7eb96edd8082b6673a9344395b87fb6
>>>>>>> 3365f423b9611a4e007e66a73c6179538db30b6c
    }
}
