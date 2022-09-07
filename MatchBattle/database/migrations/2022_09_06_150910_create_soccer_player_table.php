<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoccerPlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soccer_players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('age');
            $table->bigInteger('avg');
            $table->bigInteger('speed');
            $table->bigInteger('endurance');
            $table->bigInteger('strong');
            $table->bigInteger('skill');
            $table->bigInteger('defending');
            $table->bigInteger('shoot');
            $table->string('img');
            $table->bigInteger('position_id')->unsigned();

            $table->foreign('position_id')->references('id')->on('positions');
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
        Schema::dropIfExists('soccer_player');
    }
}
