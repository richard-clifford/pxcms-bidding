<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiddingUserBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /** Finish */
        Schema::create('bidding_user_bids', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bid_count');
            $table->integer('user_id')->unsigned()->unique();
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
        Schema::drop('bidding_user_bids');
    }
}
