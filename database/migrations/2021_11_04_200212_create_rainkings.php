<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRainkings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rankings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('volume',12)->index()->default(0);
            $table->decimal('diff_day',12)->index()->default(0);
            $table->decimal('diff_week',12)->index()->default(0);
            $table->decimal('diff_month',12)->index()->default(0);
            $table->decimal('floor',12)->index()->default(0);
            $table->decimal('roof',12)->index()->default(0);
            $table->decimal('owners',12)->index()->default(0);
            $table->decimal('assets',12)->index()->default(0);
            $table->string('hash')->index();
            $table->unsignedInteger('store_id')->index();

            $table->foreign('store_id')->references('id')->on('stores');
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
        Schema::dropIfExists('rankings');
    }
}
