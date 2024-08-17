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
    Schema::create('products', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->foreignIdFor(App\Models\User::class, 'created_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
      $table->foreignIdFor(App\Models\User::class, 'updated_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
      $table->foreignId('chapter_id')->unsigned()->constrained()->onDelete('cascade');
      $table->integer('col')->nullable();
      $table->string('name', 200);
      $table->string('code', 30);
      $table->unsignedTinyInteger('product_status_id')->nullable();
      $table->integer('height')->nullable();
      $table->integer('width')->nullable();
      $table->integer('depth')->nullable();
      $table->unsignedTinyInteger('corpus_type_id')->nullable();
      $table->integer('weight_estimation')->nullable();
      $table->integer('production_time_estimation')->nullable();
      $table->float('power')->nullable();
      $table->float('switch')->nullable();
      $table->float('cross_section')->nullable();
      $table->integer('unforeseen_expenses_percentage')->nullable();
      $table->foreignIdFor(App\Models\User::class, 'developer_id')->unsigned()->nullable()->constrained('users')->nullOnDelete();
      $table->unsignedTinyInteger('development_status_id')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('products');
  }
};
