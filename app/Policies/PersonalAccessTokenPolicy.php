<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\PersonalAccessToken;
use App\Models\User;

class PersonalAccessTokenPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('PersonalAccessToken.view-any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, PersonalAccessToken $personalaccesstoken): bool
    {
        return $user->checkPermissionTo('PersonalAccessToken.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('PersonalAccessToken.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, PersonalAccessToken $personalaccesstoken): bool
    {
        return $user->checkPermissionTo('PersonalAccessToken.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, PersonalAccessToken $personalaccesstoken): bool
    {
        return $user->checkPermissionTo('PersonalAccessToken.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, PersonalAccessToken $personalaccesstoken): bool
    {
        return $user->checkPermissionTo('PersonalAccessToken.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, PersonalAccessToken $personalaccesstoken): bool
    {
        return $user->checkPermissionTo('PersonalAccessToken.force-delete');
    }
}
