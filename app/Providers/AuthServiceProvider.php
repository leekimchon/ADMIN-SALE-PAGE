<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
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

        //categories
        Gate::define('list_categories', function (User $user) {
            return $user->checkPermissionAccess('list_categories');
        });
        Gate::define('add_categories', function (User $user) {
            return $user->checkPermissionAccess('add_categories');
        });
        Gate::define('edit_categories', function (User $user) {
            return $user->checkPermissionAccess('edit_categories');
        });
        Gate::define('delete_categories', function (User $user) {
            return $user->checkPermissionAccess('delete_categories');
        });
        //product
        Gate::define('list_product', function (User $user) {
            return $user->checkPermissionAccess('list_product');
        });
        Gate::define('add_product', function (User $user) {
            return $user->checkPermissionAccess('add_product');
        });
        Gate::define('edit_product', function (User $user) {
            return $user->checkPermissionAccess('edit_product');
        });
        Gate::define('delete_product', function (User $user) {
            return $user->checkPermissionAccess('delete_product');
        });
        //slider
        Gate::define('list_slider', function (User $user) {
            return $user->checkPermissionAccess('list_slider');
        });
        Gate::define('add_slider', function (User $user) {
            return $user->checkPermissionAccess('add_slider');
        });
        Gate::define('edit_slider', function (User $user) {
            return $user->checkPermissionAccess('edit_slider');
        });
        Gate::define('delete_slider', function (User $user) {
            return $user->checkPermissionAccess('delete_slider');
        });
        //user
        Gate::define('list_user', function (User $user) {
            return $user->checkPermissionAccess('list_user');
        });
        Gate::define('add_user', function (User $user) {
            return $user->checkPermissionAccess('add_user');
        });
        Gate::define('edit_user', function (User $user) {
            return $user->checkPermissionAccess('edit_user');
        });
        Gate::define('delete_user', function (User $user) {
            return $user->checkPermissionAccess('delete_user');
        });
        //role
        Gate::define('list_role', function (User $user) {
            return $user->checkPermissionAccess('list_role');
        });
        Gate::define('add_role', function (User $user) {
            return $user->checkPermissionAccess('add_role');
        });
        Gate::define('edit_role', function (User $user) {
            return $user->checkPermissionAccess('edit_role');
        });
        Gate::define('delete_role', function (User $user) {
            return $user->checkPermissionAccess('delete_role');
        });

        //home/admin
        Gate::define('list_home', function (User $user) {
            return $user->checkPermissionAccess('list_home');
        });
    }
}
