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
            $table->foreignId('specification_id')->unsigned()->nullable()->constrained()->nullOnDelete();
            $table->integer('col')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('servers', function (Blueprint $table) {
            $table->dropForeign('servers_specification_id_foreign	');
            $table->dropColumn('specification_id');
            $table->dropColumn('col');
        });
    }
};
