<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPositionApplicationsAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('position_applicants', function (Blueprint $table) {
            $table->string('resume')->index()->nullable();
            $table->string('name')->index()->nullable();
            $table->string('email')->index()->nullable();
            $table->string('mobile')->index()->nullable();
            $table->string('company')->index()->nullable();
            $table->string('public_url')->nullable();
            $table->string('other_url')->nullable();
            $table->text('cover_letter')->nullable();

            $table->dropColumn('blurb');
            $table->dropColumn('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('position_applicants', function (Blueprint $table) {
            $table->dropColumn('resume');
            $table->dropColumn('name');
            $table->dropColumn('email');
            $table->dropColumn('mobile');
            $table->dropColumn('company');
            $table->dropColumn('public_url');
            $table->dropColumn('other_url');
            $table->dropColumn('cover_letter');

            $table->text('blurb');
            $table->text('content');
        });
    }
}
