<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->index();
            $table->string('content')->index()->nullable();
            $table->timestamps();
        });

        Schema::create('assets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('asset_type_id')->index();
            $table->unsignedBigInteger('app_id')->index();
            $table->string('name')->index();
            $table->string('slug')->index();
            $table->string('content')->index()->nullable();

            $table->foreign('app_id')->references('id')->on('apps');
            $table->foreign('asset_type_id')->references('id')->on('asset_types');
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
        Schema::dropIfExists('assets');

        Schema::dropIfExists('asset_types');
    }
}
