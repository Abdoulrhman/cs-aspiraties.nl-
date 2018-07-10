<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToSeo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seos', function (Blueprint $table) {
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
        Schema::table('seos', function (Blueprint $table) {
            //
        });
    }
}
