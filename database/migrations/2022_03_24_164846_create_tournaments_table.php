<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('game');
            $table->string('image');
            $table->string('start_date');
            $table->string('check_in');
            $table->string('enrolled');
            $table->string('prize');
            $table->string('skill_level');
            $table->string('entry_fee');
            $table->string('slots');
            $table->string('video_url');
            $table->string('rules');
            $table->string('team_size');
            $table->string('format');
            $table->string('prize_claim');
            $table->string('first');
            $table->string('second');
            $table->string('third');












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
        Schema::dropIfExists('tournaments');
    }
}
