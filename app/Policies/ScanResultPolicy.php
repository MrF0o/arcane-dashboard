<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\ScanResult;
use App\Models\User;

class ScanResultPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('ScanResult.view-any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ScanResult $scanresult): bool
    {
        return $user->checkPermissionTo('ScanResult.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('ScanResult.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ScanResult $scanresult): bool
    {
        return $user->checkPermissionTo('ScanResult.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ScanResult $scanresult): bool
    {
        return $user->checkPermissionTo('ScanResult.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ScanResult $scanresult): bool
    {
        return $user->checkPermissionTo('ScanResult.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ScanResult $scanresult): bool
    {
        return $user->checkPermissionTo('ScanResult.force-delete');
    }
}
