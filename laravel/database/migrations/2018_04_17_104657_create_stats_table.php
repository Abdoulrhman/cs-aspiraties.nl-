<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('active_ex');
            $table->integer('happy_clients');
            $table->integer('dev_hand');
            $table->integer('com_projects');
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
        Schema::drop('stat');
    }
}
