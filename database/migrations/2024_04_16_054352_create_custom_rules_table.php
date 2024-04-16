<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('custom_rules', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('value');
            $table->text('log_message');
            $table->string('field');
            $table->enum('action', ['BLOCK', 'PASS'])->default('BLOCK');
            $table->enum('operator',
                ['EQUAL_TO', 'INCLUDES', 'ONE_OF', 'LESS_THAN', 'GREATER_THAN', 'LESS_THAN_OR_EQUAL_TO', 'GREATER_THAN_OR_EQUAL_TO']);
            $table->boolean('is_chained')->default(false);
            $table->enum('severity', ['CRITICAL', 'ERROR', 'WARNING', 'NOTICE'])->default('CRITICAL');
            $table->boolean('capture')->default(true);
            $table->foreignId('parent_id')->references('id')->on('custom_rules');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_rules');
    }
};
