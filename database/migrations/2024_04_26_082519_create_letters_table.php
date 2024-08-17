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
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(App\Models\User::class, 'created_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
            $table->foreignIdFor(App\Models\User::class, 'updated_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
            $table->date('date');
            $table->string('code', 50);
            $table->unsignedTinyInteger('letter_direction_id');
            $table->unsignedTinyInteger('letter_type_id');
            $table->string('organization', 200);
            $table->string('fio', 200);
            $table->unsignedTinyInteger('shipping_method_id')->nullable();
            $table->string('delivery_email', 250)->nullable();
            $table->string('delivery_address', 250)->nullable();
            $table->string('content', 250)->nullable();
            $table->string('applications', 250)->nullable();
            $table->foreignIdFor(App\Models\User::class, 'executor_id')->unsigned()->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('contract_id')->unsigned()->nullable()->constrained()->nullOnDelete();
            $table->date('incoming_letter_date')->nullable();
            $table->string('incoming_letter_code', 50)->nullable();
            $table->foreignIdFor(App\Models\Letter::class, 'response_to_id')->unsigned()->nullable()->constrained('letters')->nullOnDelete();
            $table->date('execute_before')->nullable();
            $table->date('execution_date')->nullable();
            $table->string('notes', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letters');
    }
};
