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
        Schema::create('file_plk', function (Blueprint $table) {
          $table->foreignId('plk_id')->unsigned()->constrained()->onDelete('cascade');
          $table->foreignId('file_id')->unsigned()->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_plk');
    }
};
