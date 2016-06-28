<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspectiongroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspectiongroup', function (Blueprint $table) {
            $table->increments('insgroupID');
            $table->integer('officeID')->unsigned();
            $table->string('groupname');   
            $table->unique('groupname');       
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
        Schema::drop('inspectiongroup');
    }
}
