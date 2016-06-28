<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHwmTransporterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hwm_transporter', function (Blueprint $table) {
            $table->increments('transporter_id');
            $table->integer('industryID')->unsigned();
            $table->integer('hwm_id')->unsigned();  
            $table->string('transportationmode',254);
            $table->string('vehicletype',254);
            $table->integer('num_vehicles');
            $table->string('registered_num',254);
            $table->string('detailsofroute_dates_times',254);
            $table->string('emergencymeasures_precautions',254);                   
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
        Schema::drop('hwm_transporter');
    }
}
