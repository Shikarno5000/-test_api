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
        Schema::create('official_notes', function (Blueprint $table) {
          $table->id();
          $table->timestamps();
          $table->foreignIdFor(App\Models\User::class, 'created_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
          $table->foreignIdFor(App\Models\User::class, 'updated_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
          $table->date('date');
          $table->string('code', 25);
          $table->foreignIdFor(App\Models\User::class, 'recipient_id')->unsigned()->nullable()->constrained('users')->nullOnDelete();
          $table->string('content', 250)->nullable();
          $table->string('applications', 250)->nullable();
          $table->foreignIdFor(App\Models\User::class, 'executor_id')->unsigned()->nullable()->constrained('users')->nullOnDelete();
          $table->string('notes', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('official_notes');
    }
};
