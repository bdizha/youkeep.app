<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreLocations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addresses', function (Blueprint $table) {
//            $table->string('title', 255)->nullable();
        });

        Schema::create('store_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('address_id')->index();
            $table->unsignedInteger('store_id')->index();
            $table->timestamps();

            $table->foreign('address_id')->references('id')->on('addresses');
            $table->foreign('store_id')->references('id')->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_addresses');
    }
}
