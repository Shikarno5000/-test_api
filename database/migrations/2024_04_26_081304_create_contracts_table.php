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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(App\Models\User::class, 'created_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
            $table->foreignIdFor(App\Models\User::class, 'updated_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
            $table->date('date');
            $table->string('code', 100);
            $table->unsignedTinyInteger('contract_status_id');
            $table->foreignIdFor(App\Models\User::class, 'responsible_executor_id')->unsigned()->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('counter_agent_id')->unsigned()->nullable()->constrained()->nullOnDelete();
            $table->foreignId('counter_agent_worker_id')->unsigned()->nullable()->constrained()->nullOnDelete();
            $table->string('subject_contract', 250)->nullable();
            $table->date('term_of_agreement')->nullable();
            $table->unsignedTinyInteger('contract_type_id')->nullable();
            $table->unsignedTinyInteger('pricing_type_id')->nullable();
            $table->double('price')->nullable();
            $table->string('notes', 50)->nullable();
            $table->unsignedTinyInteger('execution_percentage')->nullable();
            $table->foreignId('project_id')->unsigned()->nullable()->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
