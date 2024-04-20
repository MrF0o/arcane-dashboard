<?php

namespace App\Providers;

use App\Models\PersonalAccessToken;
use App\Models\User;
use App\Policies\PermissionPolicy;
use App\Policies\RolePolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
	    Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
	    Gate::before(function (User $user, string $ability) {
		    return $user->isSuperAdmin() ? true: null;
	    });
		Gate::policy(Role::class, RolePolicy::class);
		Gate::policy(Permission::class, PermissionPolicy::class);
    }
}
