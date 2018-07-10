<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateOnceServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('body_ar');
            $table->dropColumn('body_ned');
            $table->renameColumn('title_ar','main_title_ar');
            $table->renameColumn('title_ned','main_title_ned');

            $table->string('title1_ar');
            $table->string('title1_ned');

            $table->string('title2_ar');
            $table->string('title2_ned');

            $table->string('title3_ar');
            $table->string('title3_ned');

            $table->string('title4_ar');
            $table->string('title4_ned');

            $table->string('title5_ar');
            $table->string('title5_ned');

            $table->string('title6_ar');
            $table->string('title6_ned');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            //
        });
    }
}
