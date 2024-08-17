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
        Schema::table('lower_levels', function (Blueprint $table) {
            $table->foreignId('specification_id')->unsigned()->nullable()->constrained()->nullOnDelete();
            $table->integer('col')->nullable();
            $table->unsignedTinyInteger('ip_id')->nullable();
            $table->unsignedTinyInteger('ex_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lower_levels', function (Blueprint $table) {
            $table->dropForeign('lower_levels_specification_id_foreign	');
            $table->dropColumn('specification_id');
            $table->dropColumn('col');
            $table->dropColumn('ip_id');
            $table->dropColumn('ex_id');
        });
    }
};
