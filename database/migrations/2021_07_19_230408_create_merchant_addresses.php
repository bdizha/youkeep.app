<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantAddresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('merchant_id')->index();
            $table->unsignedInteger('address_id')->index();

            $table->foreign('merchant_id')->references('id')->on('merchants');
            $table->foreign('address_id')->references('id')->on('addresses');
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
        Schema::dropIfExists('merchant_addresses');
    }
}
