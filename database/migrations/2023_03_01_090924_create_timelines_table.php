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
    Schema::create('timelines', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->foreignIdFor(App\Models\User::class, 'created_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
      $table->foreignIdFor(App\Models\User::class, 'updated_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
      $table->string('text', 250);
      $table->unsignedTinyInteger('event_id')->nullable();
      $table->double('entrance')->nullable();
      $table->double('expenditure')->nullable();
      $table->text('description')->nullable();
      $table->date('date');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('timelines');
  }
};
