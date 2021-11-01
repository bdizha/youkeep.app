<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metric_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->index();
            $table->string('content')->index()->nullable();
            $table->timestamps();
        });

        Schema::create('metrics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('metric_type_id')->index();
            $table->unsignedBigInteger('app_id')->index();
            $table->string('name')->index();
            $table->string('slug')->index();
            $table->string('content')->index()->nullable();

            $table->foreign('app_id')->references('id')->on('apps');
            $table->foreign('metric_type_id')->references('id')->on('metric_types');
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
        Schema::dropIfExists('metrics');
        Schema::dropIfExists('metric_types');
    }
}
