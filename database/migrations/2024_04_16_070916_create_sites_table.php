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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->text('document_root')->default('/var/www/html');
            $table->string('domain');
            $table->integer('port')->default(80);
            $table->boolean('waf_installed')->default(false);
            $table->boolean('waf_enabled')->default(true);
            $table->foreignId('waf_version_id')->references('id')->on('waf_versions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
