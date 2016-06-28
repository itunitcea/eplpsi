<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterWaterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('water', function (Blueprint $table) {
            $table->foreign('industryID')->references('industryID')->on('industry');  
            $table->foreign('epl_licence_id')->references('applicationID')->on('epl_licence');
            $table->foreign('stndrd1_01_id')->references('stndrd1_01_id')->on('ww_stndrd1_01');
            $table->foreign('stndrd2_02_id')->references('stndrd2_02_id')->on('ww_stndrd2_02');
            $table->foreign('stndrd3_03_id')->references('stndrd3_03_id')->on('ww_stndrd3_03');
            $table->foreign('stndrd14_04_id')->references('stndrd14_04_id')->on('ww_stndrd1_4_04');
            $table->foreign('stndrd15_05_id')->references('stndrd15_05_id')->on('ww_stndrd1_5_05');
            $table->foreign('stndrd16_06_id')->references('stndrd16_06_id')->on('ww_stndrd1_6_06');
            $table->foreign('stndrd7_07_id')->references('stndrd7_07_id')->on('ww_stndrd7_07');
            $table->foreign('stndrd36_08_id')->references('stndrd36_08_id')->on('ww_stndrd3_6_08');
            $table->foreign('stndrd7_09_id')->references('stndrd7_09_id')->on('ww_stndrd7_09');           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('water', function (Blueprint $table) {
            //
        });
    }
}
