<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodeScan extends Model
{
	use HasFactory;

	protected $fillable = [
		'status',
		'site_id',
		'user_id',
	];


	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function results() {
		return $this->hasMany(ScanResult::class, 'scan_id');
	}

	public function site() {
		return $this->belongsTo(Site::class, 'site_id');
	}
}
