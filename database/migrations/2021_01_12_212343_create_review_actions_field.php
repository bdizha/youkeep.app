<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewActionsField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_actions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger('type')->index()->default(\App\ReviewAction::TYPE_COMMENT);
            $table->unsignedInteger('item_id')->index();
            $table->unsignedInteger('user_id')->index();
            $table->text('content')->nullable();

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
        Schema::dropIfExists('review_actions');
    }
}
