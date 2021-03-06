<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
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
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('student-only',function($user) {

            if($user->role == 'student')
            {
                return true;
            }
            return false;
        });

        Gate::define('admin-only',function($user) {

            if($user->role == 'admin')
            {
                return true;
            }
            return false;
        });

        Gate::define('lecturer-only',function($user) {

            if($user->role == 'lecturer')
            {
                return true;
            }
            return false;
        });


        //
    }
}
