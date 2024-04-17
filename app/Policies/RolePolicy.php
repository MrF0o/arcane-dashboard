<?php

namespace App\Policies;

use App\Models\User;
use Spatie\Permission\Models\Role;

class RolePolicy
{

	public function viewAny(User $user): bool
	{
		return $user->hasRole('Super Admin');
	}
}
