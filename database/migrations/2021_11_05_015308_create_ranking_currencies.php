<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRankingCurrencies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranking_currencies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ranking_id')->index();
            $table->unsignedBigInteger('currency_id')->index();
            $table->boolean('is_default')->index()->default(true);

            $table->foreign('ranking_id')->references('id')->on('rankings');
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
        Schema::dropIfExists('ranking_currencies');
    }
}
