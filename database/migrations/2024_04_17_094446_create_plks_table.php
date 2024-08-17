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
        Schema::create('plks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(App\Models\User::class, 'created_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
            $table->foreignIdFor(App\Models\User::class, 'updated_by')->unsigned()->nullable()->constrained('users')->nullOnDelete();
            $table->string('name', 250);
            $table->string('article', 100)->nullable();
            $table->unsignedInteger('weight_per_unit')->nullable();
            $table->boolean('nds')->default(1);
            $table->boolean('not_our')->default(0);
            $table->unsignedTinyInteger('type_operation_id');
            $table->unsignedTinyInteger('plk_type_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plks');
    }
};
