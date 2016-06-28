<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnergyReqtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_reqt', function (Blueprint $table) {
            $table->increments('er_id');
            $table->integer('industryID')->unsigned();
            $table->integer('epl_licence_id')->unsigned();  
            $table->double('totalenergyconsumption_inplantgeneration');
            $table->double('totalenergyconsumption_publicsupply');
            $table->string('detailmachinery',254);                   
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
        Schema::drop('energy_reqt');
    }
}
