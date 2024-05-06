<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScanResult extends Model
{
	use HasFactory;

	protected $fillable = [
		'start_offset',
		'end_offset',
		'file_path',
		'scan_id',
		'ai_note',
		'title',
		'vulnerable_snippets',
	];

	public function code_scan()
	{
		return $this->belongsTo(CodeScan::class, 'scan_id');
	}
}
