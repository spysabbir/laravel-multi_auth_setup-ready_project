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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
            $table->text('address')->nullable();
            $table->string('profile_photo')->default('default_profile_photo.png');
            $table->enum('role', ['Admin', 'Employee', 'User'])->default('User');
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_active_at')->useCurrent();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
