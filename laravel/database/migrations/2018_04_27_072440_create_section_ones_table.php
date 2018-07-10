<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionOnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_ones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title1_ar');
            $table->string('title2_ar');
            $table->string('title3a_ar');
            $table->string('title3b_ar');
            $table->string('title4a_ar');
            $table->string('title4b_ar');

            $table->string('title1_en');
            $table->string('title2_en');
            $table->string('title3a_en');
            $table->string('title3b_en');
            $table->string('title4a_en');
            $table->string('title4b_en');

            $table->string('title1_ned');
            $table->string('title2_ned');
            $table->string('title3a_ned');
            $table->string('title3b_ned');
            $table->string('title4a_ned');
            $table->string('title4b_ned');
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
        Schema::drop('section_ones');
    }
}
