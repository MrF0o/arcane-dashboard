<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\CustomRule;
use App\Models\User;

class CustomRulePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('CustomRule.view-any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CustomRule $customrule): bool
    {
        return $user->checkPermissionTo('CustomRule.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('CustomRule.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CustomRule $customrule): bool
    {
        return $user->checkPermissionTo('CustomRule.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CustomRule $customrule): bool
    {
        return $user->checkPermissionTo('CustomRule.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CustomRule $customrule): bool
    {
        return $user->checkPermissionTo('CustomRule.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CustomRule $customrule): bool
    {
        return $user->checkPermissionTo('CustomRule.force-delete');
    }
}
