<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersAddIdentity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->smallInteger('currentStep')->index();
            $table->unsignedInteger('birth_country_id')->index()->nullable();
            $table->smallInteger('identity_type')->index()->default(1);
            $table->string('identity_number')->index()->nullable();
            $table->unsignedInteger('citizenship_country_id')->index()->nullable();
            $table->unsignedInteger('issuing_country_id')->index()->nullable();
            $table->timestamp('identity_expires_at')->index()->nullable();

            $table->foreign('birth_country_id')->references('id')->on('countries');
            $table->foreign('citizenship_country_id')->references('id')->on('countries');
            $table->foreign('issuing_country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
