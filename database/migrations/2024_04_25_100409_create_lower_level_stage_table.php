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
        Schema::create('lower_level_stage', function (Blueprint $table) {
          $table->foreignId('lower_level_id')->unsigned()->constrained()->onDelete('cascade');
          $table->foreignId('stage_id')->unsigned()->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lower_level_stage');
    }
};
