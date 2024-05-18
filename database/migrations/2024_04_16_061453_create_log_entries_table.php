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
        Schema::create('log_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('custom_rule_id')->nullable()->references('id')->on('custom_rules');
            $table->text('message');
            $table->foreignId('blocked_message_id')->nullable()->references('id')->on('blocked_messages');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_entries');
    }
};
