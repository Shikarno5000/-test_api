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
    Schema::create('projects', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->foreignIdFor(App\Models\User::class, 'created_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
      $table->foreignIdFor(App\Models\User::class, 'updated_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
      $table->string('name', 250);
      $table->string('name_short', 20)->unique();
      $table->unsignedTinyInteger("project_type_id");
      $table->string('cipher_prefix', 25)->nullable();
      $table->foreignIdFor(App\Models\User::class, 'responsible_executor_id')->unsigned()->nullable()->constrained('users')->nullOnDelete();
      $table->string('object_description', 250)->nullable();
      $table->boolean('archive')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('projects');
  }
};
