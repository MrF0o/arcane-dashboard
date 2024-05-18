<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
	    Schema::table('log_entries', function (Blueprint $table) {
			$table->string('related_ip')->nullable();
			$table->boolean('is_ip_banned')->nullable();
			$table->json('match')->nullable();
	    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
