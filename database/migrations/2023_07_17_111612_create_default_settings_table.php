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
        Schema::create('default_settings', function (Blueprint $table) {
            $table->id();
            $table->string('app_name');
            $table->string('main_phone')->nullable();
            $table->string('support_phone')->nullable();
            $table->string('main_email')->nullable();
            $table->string('support_email')->nullable();
            $table->text('address')->nullable();
            $table->string('app_url');
            $table->string('time_zone');
            $table->string('favicon')->default('default_favicon.png');
            $table->string('logo')->default('default_logo.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('default_settings');
    }
};
