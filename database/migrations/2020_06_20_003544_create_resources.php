<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResources extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_resources', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('type')->index();
            $table->string('title')->nullable();
            $table->text('blurb')->nullable();
            $table->text('content')->nullable();
            $table->string('photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_resources');
    }
}
