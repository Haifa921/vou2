<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
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
        $this->registerPolicies();

        Gate::define('create-user', function (User $user) {
            return $user->is_admin
                ? Response::allow()
                : Response::deny();
        });
        Gate::define('create-type', function (User $user) {
            return $user->is_admin
                ? Response::allow()
                : Response::deny();
        });
        Gate::define('update-type', function (User $user) {
            return $user->is_admin
            ? Response::allow()
            : Response::deny();
        });
        Gate::define('create-form', function (User $user) {
            return $user->type != 'volunteer'
            ? Response::allow()
            : Response::deny();
        });
        Gate::define('form-acceptance', function (User $user) {
            return $user->type != 'volunteer'
            ? Response::allow()
            : Response::deny();
        });
        Gate::define('create-payment', function (User $user) {
            return $user->is_admin
                ? Response::allow()
                : Response::deny();
        });
    }
}
