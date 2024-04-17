<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\BlockedMessage;
use App\Models\User;

class BlockedMessagePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('BlockedMessage.view-any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, BlockedMessage $blockedmessage): bool
    {
        return $user->checkPermissionTo('BlockedMessage.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('BlockedMessage.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, BlockedMessage $blockedmessage): bool
    {
        return $user->checkPermissionTo('BlockedMessage.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, BlockedMessage $blockedmessage): bool
    {
        return $user->checkPermissionTo('BlockedMessage.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, BlockedMessage $blockedmessage): bool
    {
        return $user->checkPermissionTo('BlockedMessage.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, BlockedMessage $blockedmessage): bool
    {
        return $user->checkPermissionTo('BlockedMessage.force-delete');
    }
}
