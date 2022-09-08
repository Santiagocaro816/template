<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('player_id')->unsigned();
            $table->bigInteger('room_id')->unsigned();
            $table->bigInteger('card_id')->unsigned();

            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('room_id')->references('id')->on('room');
            $table->foreign('card_id')->references('id')->on('cards');


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
        Schema::dropIfExists('game');
    }
}
