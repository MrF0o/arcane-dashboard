<?php

namespace App\Models;

use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;

class PersonalAccessToken extends SanctumPersonalAccessToken
{
	protected $casts = [
		'abilities' => 'json',
		'last_used_at' => 'datetime',
		'expires_at' => 'datetime',
	];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'token_representation',
		'valid',
		'token',
		'abilities',
		'expires_at',
	];

	/**
	 * The attributes that should be hidden for serialization.
	 *
	 * @var array
	 */
	protected $hidden = [
		'token',
	];
}