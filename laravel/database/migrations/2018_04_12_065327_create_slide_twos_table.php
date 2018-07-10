<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideTwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_twos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title1');
            $table->string('title2');
            $table->string('title3');
            $table->string('title4a');
            $table->string('title4b');
            $table->string('body');
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
        Schema::drop('slide_twos');
    }
}
