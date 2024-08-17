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
        Schema::table('chapter_software', function (Blueprint $table) {
            $table->foreignId('specification_id')->unsigned()->nullable()->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chapter_software', function (Blueprint $table) {
            $table->dropForeign('chapter_software_specification_id_foreign	');
            $table->dropColumn('specification_id');
        });
    }
};
