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
        Schema::table('elements', function (Blueprint $table) {
            $table->unsignedTinyInteger('order_code_id')->nullable();
            $table->string('manufacturer', 50)->nullable();
            $table->unsignedTinyInteger('unit_id')->nullable()->change();
            $table->unsignedTinyInteger('element_type_id')->nullable()->change();
            $table->string('article', 100)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('elements', function (Blueprint $table) {
            $table->dropColumn('order_code_id');
            $table->dropColumn('manufacturer');
        });
    }
};
