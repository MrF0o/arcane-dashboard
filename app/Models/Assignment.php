<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assignment extends Model
{
    use HasFactory;

	protected $fillable = [
		'user_id',
		'admin_id',
		'scan_result_id',
		'status'
	];



	public function scan(): BelongsTo
	{
		return $this->belongsTo(ScanResult::class, 'scan_result_id');
	}

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function admin(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
