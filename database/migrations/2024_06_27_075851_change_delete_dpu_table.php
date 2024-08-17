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
        // Schema::table('dpu_file', function (Blueprint $table) {
        //     $table->dropForeign('dpu_file_dpu_id_foreign');
        //     $table->dropForeign('dpu_file_file_id_foreign');
        // });
        Schema::dropIfExists('dpu_file');
        // Schema::table('dpus', function (Blueprint $table) {
        //     $table->dropForeign('dpus_created_by_foreign');
        //     $table->dropForeign('dpus_updated_by_foreign');
        // });
        Schema::dropIfExists('chapter_dpus');
        Schema::dropIfExists('dpus');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
