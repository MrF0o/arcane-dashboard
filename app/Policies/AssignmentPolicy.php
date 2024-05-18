<?php

namespace App\Policies;

use App\Models\Assignment;
use Illuminate\Auth\Access\Response;
use App\Models\User;

class AssignmentPolicy
{
	/**
	 * Determine whether the user can view any models.
	 */
	public function viewAny(User $user): bool
	{
		return $user->checkPermissionTo('Assignment.view-any');
	}

	/**
	 * Determine whether the user can view the model.
	 */
	public function view(User $user, Assignment $assignment): bool
	{
		return $user->checkPermissionTo('Assignment.view');
	}

	/**
	 * Determine whether the user can create models.
	 */
	public function create(User $user): bool
	{
		return $user->checkPermissionTo('Assignment.create');
	}

	/**
	 * Determine whether the user can update the model.
	 */
	public function update(User $user, Assignment $assignment): bool
	{
		return $user->checkPermissionTo('Assignment.update');
	}

	/**
	 * Determine whether the user can delete the model.
	 */
	public function delete(User $user, Assignment $assignment): bool
	{
		return $user->checkPermissionTo('Assignment.delete');
	}

	/**
	 * Determine whether the user can restore the model.
	 */
	public function restore(User $user, Assignment $assignment): bool
	{
		return $user->checkPermissionTo('Assignment.restore');
	}

	/**
	 * Determine whether the user can permanently delete the model.
	 */
	public function forceDelete(User $user, Assignment $assignment): bool
	{
		return $user->checkPermissionTo('Assignment.force-delete');
	}
}
