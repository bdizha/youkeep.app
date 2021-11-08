<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('product_id')->index();
            $table->unsignedBigInteger('currency_id')->index();
            $table->unsignedInteger('actor_id')->index()->nullable();
            $table->unsignedInteger('item_id')->index()->nullable();
            $table->tinyInteger('type')->index();
            $table->string('from')->index()->nullable();
            $table->string('to')->index()->nullable();
            $table->decimal('price')->index()->nullable();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('currency_id')->references('id')->on('currencies');
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
        Schema::dropIfExists('events');
    }
}
