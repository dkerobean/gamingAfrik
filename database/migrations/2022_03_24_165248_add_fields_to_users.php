<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('wins')->nullable();
            $table->string('username')->nullable();
            $table->integer('Earnings')->nullable();
            $table->boolean('is_verified')->nullable();
            $table->string('profile_image')->nullable();
            $table->integer('gold_trophy')->nullable();
            $table->integer('silver_trophy')->nullable();
            $table->integer('bronze_trophy')->nullable();
            $table->integer('elite_trophy')->nullable();



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
