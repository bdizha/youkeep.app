<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('brand_id')->index();
            $table->unsignedInteger('product_id')->index();
            $table->timestamps();

            $table->foreign('brand_id')->references('id')->on('brands');
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
        Schema::dropIfExists('brand_products');
    }
}
