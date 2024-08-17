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
        Schema::create('specifications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(App\Models\User::class, 'created_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
            $table->foreignIdFor(App\Models\User::class, 'updated_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('contract_id')->unsigned()->constrained()->onDelete('cascade');
            $table->string('article', 100);
            $table->string('description', 250)->nullable();
            $table->date('date')->nullable();
            $table->date('delivery_date')->nullable();
            $table->foreignId('counter_agent_id')->nullable()->unsigned()->constrained()->onDelete('cascade');
            $table->text('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specifications');
    }
};
