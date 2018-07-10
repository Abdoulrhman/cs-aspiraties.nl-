<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToSlide1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slide_one_titles', function (Blueprint $table) {
            $table->string('title1_ar');
            $table->string('title2_ar');
            $table->string('title3_ar');
            $table->string('title4_ar');
            $table->string('title5_ar');
            $table->string('title6_ar');
            $table->string('title7_ar');
            $table->string('title8_ar');

            $table->string('title1_ned');
            $table->string('title2_ned');
            $table->string('title3_ned');
            $table->string('title4_ned');
            $table->string('title5_ned');
            $table->string('title6_ned');
            $table->string('title7_ned');
            $table->string('title8_ned');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slide_one_titles', function (Blueprint $table) {
            //
        });
    }
}
