<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('article_category_id')->index();
            $table->unsignedInteger('article_resource_id')->index();

//            $table->foreign('article_category_id')->references('id')->on('article_categories');
//            $table->foreign('article_resource_id')->references('id')->on('article_resources');
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
        Schema::dropIfExists('category_articles');
    }
}
