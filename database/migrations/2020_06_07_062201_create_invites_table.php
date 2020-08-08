<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('type')->nullable();
            $table->string('coupon', 255)->nullable();
            $table->text('notes', 255)->nullable();
            $table->dateTime('expire_at')->nullable();
            $table->unsignedInteger('user_id')->index();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('invites', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('type')->nullable();
            $table->string('email', 255)->nullable();
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('promo_id')->index();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('promos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invites');
    }
}
