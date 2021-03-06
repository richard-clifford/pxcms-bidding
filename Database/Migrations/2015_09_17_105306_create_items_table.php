<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidding_items', function (Blueprint $table) {
            $table->increments('id')->unsigned;
            $table->string('name', 255);
            $table->float('start_price');
            $table->tinyInteger('condition');
            $table->boolean('is_stattrak');
            $table->float('RRP');
            $table->tinyInteger('rarity');
            $table->tinyInteger('active');
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->integer('user_id')->unsigned;
            $table->softDeletes();
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
        Schema::drop('bidding_items');
    }
}
