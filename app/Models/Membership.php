<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

	protected $fillable = [
		'price',
		'title',
		'description',
		'free_trial',
	];

	public function subscriptions() {
		return $this->hasMany(Subscription::class);
	}
}
