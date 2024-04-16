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
        Schema::create('blocked_messages', function (Blueprint $table) {
            $table->id();
            $table->enum('block_reason', ['NATIVE', 'CUSTOM']);
            $table->foreignId('custom_rule_id')->nullable()->references('id')->on('custom_rules');
            $table->bigInteger('native_rule_id')->nullable();
            $table->enum('message_type', ['REQUEST', 'RESPONSE'])->nullable();
            $table->text('base')->nullable();
            $table->text('body')->nullable();
            $table->string('related_ip')->nullable();
            $table->boolean('is_ip_blocked')->nullable();
            $table->text('headers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blocked_messages');
    }
};
