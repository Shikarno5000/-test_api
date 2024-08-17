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
    Schema::create('counter_agents', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->foreignIdFor(App\Models\User::class, 'created_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
      $table->foreignIdFor(App\Models\User::class, 'updated_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
      $table->string('name', 250);
      $table->string('name_short', 50);
      $table->string('legal_address', 250)->nullable();
      $table->string('actual_address', 250)->nullable();
      $table->string('inn', 30);
      $table->string('kpp', 30)->nullable();
      $table->string('ogrn', 30)->nullable();
      $table->string('okpo', 30)->nullable();
      $table->string('oktmo', 30)->nullable();
      $table->unsignedTinyInteger('counter_agent_role_id');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('counter_agents');
  }
};
