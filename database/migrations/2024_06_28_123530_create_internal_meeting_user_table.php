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
        Schema::create('internal_meeting_user', function (Blueprint $table) {
            $table->foreignId('internal_meeting_id')->unsigned()->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->unsigned()->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internal_meeting_user');
    }
};
