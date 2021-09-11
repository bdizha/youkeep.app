<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppArticleCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_article_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('article_category_id')->index();
            $table->unsignedBigInteger('app_id')->index();

            $table->foreign('article_category_id')->references('id')->on('article_categories');
            $table->foreign('app_id')->references('id')->on('apps');
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
        Schema::dropIfExists('app_article_categories');
    }
}
