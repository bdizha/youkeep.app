<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterStoreCategoryAlterCategoryFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('store_categories', function (Blueprint $table) {
            $table->smallInteger('level')->index()->default(-1);
            $table->string('url')->index()->nullable();
            $table->unsignedInteger('parent_id')->index()->nullable();
            $table->boolean('has_products')->index()->default(false);
            $table->boolean('has_categories')->index()->default(false);
            $table->dateTime('randomized_at')->nullable();
            $table->smallInteger('product_count');

            $table->foreign('parent_id')->references('id')->on('store_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('store_categories', function (Blueprint $table) {
            $table->dropColumn('url');
            $table->dropColumn('parent_id');
            $table->dropColumn('level');
        });
    }
}
