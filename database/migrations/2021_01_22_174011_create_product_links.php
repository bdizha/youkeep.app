<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductLinks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_links', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger('type')->index()->default(\App\ProductLink::TYPE_RELATED);
            $table->unsignedInteger('product_id')->index();
            $table->unsignedInteger('related_id')->index();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('related_id')->references('id')->on('products');
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
        Schema::dropIfExists('product_links');
    }
}
