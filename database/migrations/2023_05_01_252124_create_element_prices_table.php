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
    Schema::create('element_prices', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->foreignIdFor(App\Models\User::class, 'created_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
      $table->foreignIdFor(App\Models\User::class, 'updated_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
      $table->foreignId('element_id')->unsigned()->constrained()->onDelete('cascade');
      $table->foreignId('counter_agent_id')->unsigned()->constrained()->onDelete('cascade');
      $table->double('price');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('element_prices');
  }
};
