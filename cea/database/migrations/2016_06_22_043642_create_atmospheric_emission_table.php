<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtmosphericEmissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atmospheric_emission', function (Blueprint $table) {
            $table->increments('ai_id');
            $table->integer('industryID')->unsigned();
            $table->integer('epl_licence_id')->unsigned();
            $table->boolean('nitrogenOxide');
            $table->boolean('sulfurOxide');
            $table->boolean('dustAndSoot');
            $table->string('other',254);
            $table->integer('noOfStacks');
            $table->double('height');
            $table->boolean('causedOdorProblems');
            $table->string('source',254); 
            $table->string('modeofabatement',254);                   
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
        Schema::drop('atmospheric_emission');
    }
}
