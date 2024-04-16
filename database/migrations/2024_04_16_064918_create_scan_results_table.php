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
        Schema::create('scan_results', function (Blueprint $table) {
            $table->id();
            $table->integer('start_offset')->nullable();
            $table->integer('end_offset')->nullable();
            $table->text('file_path')->nullable();
            $table->text('ai_note')->nullable();
            $table->text('vulnerable_snippets')->nullable();
            $table->string('ai_model')->nullable();
            $table->string('language');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scan_results');
    }
};
