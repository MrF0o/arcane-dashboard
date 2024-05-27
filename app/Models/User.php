<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Althinect\FilamentSpatieRolesPermissions\Concerns\HasSuperAdmin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\NewAccessToken;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
	use HasFactory, Notifiable;
	use HasSuperAdmin, HasRoles, HasPermissions, HasApiTokens;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'name',
		'email',
		'supervisor_id',
		'password',
	];

	/**
	 * The attributes that should be hidden for serialization.
	 *
	 * @var array<int, string>
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	public function sites()
	{
		return $this->hasMany(Site::class);
	}

	public function code_scans(): HasMany
	{
		return $this->hasMany(CodeScan::class);
	}

	/**
	 * Get the attributes that should be cast.
	 *
	 * @return array<string, string>
	 */
	protected function casts(): array
	{
		return [
			'email_verified_at' => 'datetime',
			'password' => 'hashed',
		];
	}

	public function createToken(string $name, array $abilities = ['*']): NewAccessToken
	{
		$plainTextToken = Str::random(40);
		$first5 = Str::substr($plainTextToken, 0, 5);
		$token = $this->tokens()->create([
			'name' => $name,
			'token' => hash('sha256', $plainTextToken),
			'abilities' => $abilities,
			'token_representation' => $first5,
		]);

		return new NewAccessToken($token, $token->getKey() . '|' . $plainTextToken);
	}

	public static function booted(): void
	{
		static::creating(function (User $user) {
			if ($user->supervisor_id) {
				$user->assignRole('User');
			} else {
				$user->assignRole('Admin');
			}
		});
	}

	public function subscriptions(): HasOne
    {
		return $this->hasOne(Subscription::class);
	}

	public function subscribed(): bool
    {
		return !$this->subscriptions()->get()->isEmpty() || $this->isSuperAdmin() || $this->hasRole('User');
	}
}
