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
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id')->unsigned;
            $table->string('name', 255);
            $table->float('start_price');
            $table->integer('condition');
            $table->boolean('is_stattrak');
            $table->float('RRP');
            $table->integer('rarity');
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
        Schema::drop('items');
    }
}
