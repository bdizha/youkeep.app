<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlerts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerts', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('type')->index();
            $table->string('title')->nullable()->index();
            $table->string('email')->nullable()->index();
            $table->string('name')->nullable()->index();
            $table->string('mobile')->nullable()->index();
            $table->boolean('is_active')->nullable()->index();
            $table->unsignedInteger('item_id')->index();
            $table->unsignedInteger('count')->index();
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
        Schema::dropIfExists('alerts');
    }
}
