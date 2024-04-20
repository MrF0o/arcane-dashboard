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
        Schema::create('waf_versions', function (Blueprint $table) {
            $table->id();
			$table->string('waf_version_string')->nullable();
			$table->string('waf_version_numeric')->nullable();
			$table->boolean('debug')->nullable();
			$table->text('binary_path')->nullable();
			$table->json('platforms')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waf_versions');
    }
};
