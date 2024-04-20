<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WafVersion extends Model
{
    use HasFactory;

	protected $casts = [
		'platforms' => 'json'
	];
}
