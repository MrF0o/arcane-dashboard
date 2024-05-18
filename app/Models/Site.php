<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Site extends Model
{
	use HasFactory;

	protected $fillable = [
		'document_root',
		'domain',
		'port',
		'user_id',
		'waf_installed',
		'waf_enabled',
		'waf_version_id',
	];


	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function logs() {
		return $this->hasMany(LogEntry::class);
	}
}
