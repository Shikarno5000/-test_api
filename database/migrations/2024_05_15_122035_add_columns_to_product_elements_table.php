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
        Schema::table('product_elements', function (Blueprint $table) {
          $table->double('fix_price')->unsigned()->nullable();
          $table->foreignIdFor(App\Models\ElementPrice::class, 'element_price_id')->unsigned()->nullable()->constrained('element_prices')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_elements', function (Blueprint $table) {
          $table->dropColumn('fix_price');
          $table->dropForeign('product_elements_element_price_id_foreign	');
          $table->dropColumn('element_price_id');
        });
    }
};
