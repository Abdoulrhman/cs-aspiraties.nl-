<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateSlideOneTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_one_titles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title1');
            $table->string('title2');
            $table->string('title3');
            $table->string('title4');
            $table->string('title5');
            $table->string('title6');
            $table->string('title7');
            $table->string('title8');
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
        Schema::drop('slide_one_titles');
    }
}
