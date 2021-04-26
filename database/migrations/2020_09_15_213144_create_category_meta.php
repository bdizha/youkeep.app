<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryMeta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_meta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger('level')->index()->default(0);
            $table->smallInteger('type')->index()->default(0);
            $table->smallInteger('external_url')->index()->nullable();
            $table->unsignedInteger('parent_id')->index();
            $table->unsignedInteger('child_id')->index();

            $table->foreign('parent_id')->references('id')->on('categories');
            $table->foreign('child_id')->references('id')->on('categories');
            $table->timestamps();
        });

        Schema::table('categories', function (Blueprint $table) {
//            $table->bigIncrements('order');
//            $table->bigIncrements('level');
//            $table->bigIncrements('url');
//            $table->bigIncrements('category_id');
//            $table->bigIncrements('store_id');
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_meta');
    }
}
