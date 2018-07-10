<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionFivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_fives', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('photo_id')->unsigned()->index();
            $table->string('title1_ar');
            $table->string('title2_ar');
            $table->string('title3_ar');
            $table->string('title4_ar');

            $table->string('title1_en');
            $table->string('title2_en');
            $table->string('title3_en');
            $table->string('title4_en');

            $table->string('title1_ned');
            $table->string('title2_ned');
            $table->string('title3_ned');
            $table->string('title4_ned');
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
        Schema::drop('section_fives');
    }
}
