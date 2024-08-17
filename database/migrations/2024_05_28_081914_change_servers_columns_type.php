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
       Schema::table('servers', function (Blueprint $table) {
          $table->string('article', 100)->change();
          $table->unsignedTinyInteger('nds_value_id')->nullable();
          $table->dropColumn('nds');
          $table->unsignedTinyInteger('type_operation_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
