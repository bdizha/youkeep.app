<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductVariants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('price')->index();
            $table->decimal('discount')->index();
            $table->boolean('is_active')->default(true)->index();
            $table->unsignedInteger('product_type_id')->index();
            $table->unsignedInteger('product_id')->index();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('product_type_id')->references('id')->on('product_types');
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
        Schema::dropIfExists('product_variants');
    }
}
