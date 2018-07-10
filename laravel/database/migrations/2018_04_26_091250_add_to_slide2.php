<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToSlide2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slide_twos', function (Blueprint $table) {
            $table->string('title1_ar');
            $table->string('title2_ar');
            $table->string('title3_ar');
            $table->string('title4a_ar');
            $table->string('title4b_ar');
            $table->string('body_ar');

            $table->string('title1_ned');
            $table->string('title2_ned');
            $table->string('title3_ned');
            $table->string('title4a_ned');
            $table->string('title4b_ned');
            $table->string('body_ned');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slide_twos', function (Blueprint $table) {
            //
        });
    }
}
