<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEplLicenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epl_licence', function (Blueprint $table) {
            $table->increments('applicationID');
            $table->integer('industryID')->unsigned();
            $table->integer('categoryID');
            $table->integer('applicationtype')->unsigned();
            $table->integer('eplcategoryID')->unsigned();
            $table->integer('w_id')->unsigned();
            $table->integer('sw_id')->unsigned();
            $table->integer('ai_id')->unsigned();
            $table->integer('noise_id')->unsigned();
            $table->integer('er_id')->unsigned();
            $table->date('recodeDate');
            $table->date('appDate');
            $table->integer('appno');
            $table->date('eplissuedate');
            $table->date('validfrom');
            $table->date('validto');
            $table->integer('monitoring');
            $table->integer('testreport');
            $table->integer('appstat');
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
        Schema::drop('epl_licence');
    }
}
