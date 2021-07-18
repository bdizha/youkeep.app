<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryMaps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_maps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('from_category_id')->index();
            $table->unsignedInteger('to_category_id')->index();

            $table->foreign('from_category_id')->references('id')->on('store_categories');
            $table->foreign('to_category_id')->references('id')->on('store_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_maps');
    }
}
