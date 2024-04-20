<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
	use HasFactory;

	protected $fillable = [
		'document_root',
		'domain',
		'port',
		'waf_installed',
		'waf_enabled',
		'waf_version_id',
	];
}
