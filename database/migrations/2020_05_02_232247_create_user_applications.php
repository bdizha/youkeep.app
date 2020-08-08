<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserApplications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('position_applicant_id')->index();
            $table->unsignedInteger('user_id')->index();
            $table->timestamps();

            $table->foreign('position_applicant_id')->references('id')->on('position_applicants');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_applications');
    }
}
