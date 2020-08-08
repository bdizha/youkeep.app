<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutritionProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutrition_products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nutrition_id')->index();
            $table->unsignedInteger('product_id')->index();
            $table->timestamps();

            $table->foreign('nutrition_id')->references('id')->on('nutritions');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nutrition_products');
    }
}
