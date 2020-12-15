<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCategoryAlterStoreFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
//            $table->dropColumn('store_id');
//            $table->dropColumn('category_id');
//            $table->dropColumn('url');
            $table->dropColumn('level');
            $table->dropColumn('has_products');
            $table->dropColumn('has_categories');
            $table->dropColumn('randomized_at');
            $table->dropColumn('product_count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
//            $table->smallInteger('store_id')->nullable();
//            $table->smallInteger('category_id')->nullable();
//            $table->string('url')->nullable();
//            $table->smallInteger('level')->index()->default(-1);
            $table->boolean('has_products')->index()->default(false);
            $table->boolean('has_categories')->index()->default(false);
            $table->dateTime('randomized_at');
            $table->smallInteger('product_count');
        });
    }
}
