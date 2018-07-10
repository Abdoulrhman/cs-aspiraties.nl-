<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToAchivments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('achivments', function (Blueprint $table) {
            $table->string('title_ar');
            $table->string('body_ar');
            $table->string('title_ned');
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
        Schema::table('achivments', function (Blueprint $table) {
            //
        });
    }
}
