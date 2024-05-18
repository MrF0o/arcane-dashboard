<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

	protected $fillable = [
		'free_trial',
		'end_at',
		'user_id',
		'membership_id'
	];

	public function membership() {
		return $this->belongsTo(Membership::class);
	}
}
