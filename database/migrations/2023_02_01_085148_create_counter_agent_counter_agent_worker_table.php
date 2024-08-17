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
    Schema::create('counter_agent_counter_agent_worker', function (Blueprint $table) {
      $table->foreignId('counter_agent_id')->unsigned()->constrained()->onDelete('cascade');
      $table->bigInteger('counter_agent_worker_id')->unsigned();
      $table->foreign('counter_agent_worker_id', 'caw_id_foreign')->references('id')->on('counter_agent_workers')->cascadeOnDelete();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('counter_agent_counter_agent_worker');
  }
};
