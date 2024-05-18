<?php

namespace App\Policies;

use App\Models\User;
use App\Models\WafVersion;
use Illuminate\Auth\Access\Response;

class WafVersionPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('WafVersion.view-any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, WafVersion $wafVersion): bool
    {
	    return $user->checkPermissionTo('WafVersion.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
	    return $user->checkPermissionTo('WafVersion.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, WafVersion $wafVersion): bool
    {
	    return $user->checkPermissionTo('WafVersion.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, WafVersion $wafVersion): bool
    {
	    return $user->checkPermissionTo('WafVersion.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, WafVersion $wafVersion): bool
    {
	    return $user->checkPermissionTo('WafVersion.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, WafVersion $wafVersion): bool
    {
	    return $user->checkPermissionTo('WafVersion.force-delete');
    }
}
