<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WafVersion extends Model
{
    use HasFactory;

	protected $fillable = [
		'waf_version_string',
		'waf_version_numeric',
		'debug',
		'binary_path',
		'platforms',
	];

	protected $casts = [
		'platforms' => 'json'
	];
}
