<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\CodeScan;
use App\Models\User;

class CodeScanPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('CodeScan.view-any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CodeScan $codescan): bool
    {
        return $user->checkPermissionTo('CodeScan.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('CodeScan.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CodeScan $codescan): bool
    {
        return $user->checkPermissionTo('CodeScan.update');
    }

    public function edit(User $user, CodeScan $codescan): bool
    {
        return $user->checkPermissionTo('CodeScan.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CodeScan $codescan): bool
    {
        return $user->checkPermissionTo('CodeScan.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CodeScan $codescan): bool
    {
        return $user->checkPermissionTo('CodeScan.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CodeScan $codescan): bool
    {
        return $user->checkPermissionTo('CodeScan.force-delete');
    }
}
