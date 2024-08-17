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
        Schema::create('element_codes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(App\Models\User::class, 'created_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
            $table->foreignIdFor(App\Models\User::class, 'updated_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('element_id')->unsigned()->constrained()->onDelete('cascade');
            $table->string('code', 50);
            $table->float('weight_per_unit')->nullable();
            $table->unsignedTinyInteger('type_operation_id')->nullable();
            $table->unsignedTinyInteger('ip_id')->nullable();
            $table->unsignedTinyInteger('ex_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('element_codes');
    }
};
