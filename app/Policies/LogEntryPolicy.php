<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\LogEntry;
use App\Models\User;

class LogEntryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('LogEntry.view-any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, LogEntry $logentry): bool
    {
        return $user->checkPermissionTo('LogEntry.view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('LogEntry.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, LogEntry $logentry): bool
    {
        return $user->checkPermissionTo('LogEntry.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, LogEntry $logentry): bool
    {
        return $user->checkPermissionTo('LogEntry.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, LogEntry $logentry): bool
    {
        return $user->checkPermissionTo('LogEntry.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, LogEntry $logentry): bool
    {
        return $user->checkPermissionTo('LogEntry.force-delete');
    }
}
