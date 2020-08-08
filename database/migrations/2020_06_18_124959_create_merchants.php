<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('email')->nullable();
            $table->text('business')->nullable();
            $table->text('phone')->nullable();
            $table->smallInteger('role')->index();
            $table->smallInteger('industry')->nullable();
            $table->unsignedInteger('country_id')->nullable();
            $table->smallInteger('annual_sales')->nullable();
            $table->smallInteger('order_value')->nullable();
            $table->smallInteger('platform')->nullable();
            $table->string('url')->nullable();
            $table->text('address')->nullable();
            $table->text('notes')->nullable();

            $table->unsignedInteger('user_id')->index();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchants');
    }
}
