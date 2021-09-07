<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->index();
            $table->string('slug')->index();
            $table->text('description')->index()->nullable();
            $table->string('url')->index();
            $table->boolean('is_active')->index()->default(1);
            $table->timestamps();
        });

        Schema::table('article_resources', function (Blueprint $table) {
            $table->unsignedInteger('app_id')->index();
//            $table->foreign('app_id')->references('id')->on('apps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apps');
    }
}
