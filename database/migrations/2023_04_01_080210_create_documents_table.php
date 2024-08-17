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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(App\Models\User::class, 'created_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
            $table->foreignIdFor(App\Models\User::class, 'updated_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('chapter_id')->unsigned()->constrained()->onDelete('cascade');
            $table->string('name', 250);
            $table->string('suffix', 25)->nullable();
            $table->integer('sort')->nullable()->unsigned()->default(10);
            $table->integer('execution_weight')->nullable()->unsigned();
            $table->unsignedTinyInteger('document_status_id')->nullable();
            $table->date('last_status_change')->nullable();
            $table->string('change_from_gip', 250)->nullable();
            $table->foreignIdFor(App\Models\User::class, 'executor_id')->unsigned()->nullable()->constrained('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
