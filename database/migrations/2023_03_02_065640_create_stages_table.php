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
    Schema::create('stages', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->foreignIdFor(App\Models\User::class, 'created_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
      $table->foreignIdFor(App\Models\User::class, 'updated_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
      $table->string('name', 100);
      $table->boolean('checked')->default(0);
      $table->string('class', 20)->default('m-badge--gray');
      $table->integer('sort')->unsigned()->default(10);
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('stages');
  }
};
