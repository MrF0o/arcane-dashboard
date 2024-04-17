<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomRule extends Model
{
	use HasFactory;

	protected $fillable = [
		'name',
		'description',
		'value',
		'log_message',
		'field',
		'action',
		'operator',
		'is_chained',
		'severity',
		'capture',
		'parent_id',
	];
}
