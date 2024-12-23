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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
			$table->foreignId('user_id')->references('id')->on('users');
			$table->foreignId('admin_id')->references('id')->on('users');
			$table->foreignId('scan_result_id')->references('id')->on('scan_results');
			$table->string('status')->default('fixed'); // fixed or not fixed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
