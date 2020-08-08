<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLookups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lookups', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('type')->index();
            $table->string('title')->nullable()->index();
            $table->string('route')->nullable()->index();
            $table->unsignedInteger('item_id')->index();
            $table->unsignedInteger('order')->index();
            $table->unsignedInteger('count')->nullable()->index();
            $table->unsignedInteger('store_id')->index();
            $table->string('photo')->nullable()->index();
            $table->timestamps();

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
        Schema::dropIfExists('lookups');
    }
}
