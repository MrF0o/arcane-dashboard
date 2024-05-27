<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogEntry extends Model
{
    use HasFactory;

	public function site() {
		return $this->belongsTo(Site::class);
	}

    protected $fillable = [
        'message',
        'is_ip_banned',
        'site_id',
        'related_ip',
        'match',
    ];
}
