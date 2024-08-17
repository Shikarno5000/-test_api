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
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedTinyInteger('version')->nullable();
            $table->foreignIdFor(App\Models\Product::class, 'version_group')->unsigned()->nullable()->constrained('products')->nullOnDelete();
            $table->date('version_date')->nullable();
            $table->string('version_comment', 100)->nullable();
            $table->double('version_price')->nullable();
            $table->boolean('version_pfa')->nullable();
            $table->boolean('ups')->nullable();
            $table->unsignedTinyInteger('ip_id')->nullable();
            $table->string('voltage', 15)->nullable();
            $table->unsignedTinyInteger('location_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('version');
            $table->dropForeign('products_version_group_foreign');
            $table->dropColumn('version_group');
            $table->dropColumn('version_date');
            $table->dropColumn('version_comment');
            $table->dropColumn('version_price');
            $table->dropColumn('version_pfa');
            $table->dropColumn('ups');
            $table->dropColumn('ip_id');
            $table->dropColumn('voltage');
            $table->dropColumn('location_id');
        });
    }
};
