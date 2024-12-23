<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Membership;
use App\Models\User;

class MembershipPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('Membership.view-any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Membership $membership): bool
    {
        return $user->checkPermissionTo('Membership.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('Membership.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Membership $membership): bool
    {
        return $user->checkPermissionTo('Membership.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Membership $membership): bool
    {
        return $user->checkPermissionTo('Membership.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Membership $membership): bool
    {
        return $user->checkPermissionTo('Membership.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Membership $membership): bool
    {
        return $user->checkPermissionTo('Membership.force-delete');
    }
}
