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
        Schema::table('scan_results', function (Blueprint $table) {
            $table->foreignId('site_id')->references('id')->on('sites');
            $table->foreignId('scan_id')->references('id')->on('code_scans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('scan_results', function (Blueprint $table) {
	        $table->dropColumn('site_id');
	        $table->dropColumn('scan_id');
        });
    }
};
