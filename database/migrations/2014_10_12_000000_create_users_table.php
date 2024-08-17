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
      $table->timestamps();
      $table->string('email', 50)->unique();
      $table->string('password', 100);
      $table->string('name', 50);
      $table->string('name_short', 25);
      $table->date('birth_date')->nullable();
      $table->string('phone', 20)->nullable();
      $table->string('phone_internal', 20)->nullable();
      $table->string('comment', 100)->nullable();
      $table->unsignedTinyInteger('department_id');
      $table->unsignedTinyInteger('user_role_id');
      $table->unsignedTinyInteger('user_status_id');
      $table->unsignedInteger('salary')->nullable();
      $table->unsignedInteger('working_hours')->nullable();
      $table->json('settings');
      $table->rememberToken();
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
