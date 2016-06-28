<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection', function (Blueprint $table) {
            $table->integer('industryID')->unsigned();
            $table->date('inspectiondate');
            $table->string('nameOfInspectionOfficer');
            $table->string('inspectionStatus');
            $table->integer('fileID');
            $table->increments('infileID');
            $table->integer('epl_licence_id')->unsigned();
            $table->date('scheduledDate');
            $table->string('reason',254);                     
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
        Schema::drop('inspection');
    }
}
