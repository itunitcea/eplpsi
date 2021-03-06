<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('water', function (Blueprint $table) {
            $table->increments('w_id');
            $table->integer('industryID')->unsigned();
            $table->integer('epl_licence_id')->unsigned();   
            $table->double('wr_processing');
            $table->double('wr_cooling');
            $table->double('wr_washing');
            $table->double('wr_domestic');
            $table->double('totaldailydischargewwater');
            $table->string('discharge_method',254);
            $table->string('otherspecifictoxicdischarged',254);
            $table->string('wwtreatmentmethod',254);
            $table->string('ww_methodadoptedforrecordingcharb_anda_treatment',254);
            $table->string('water_recycling',254);
            $table->string('precautionarymeasure_transport_handling_htfe_mat',254);
            $table->double('swater_publicsupply');
            $table->double('swater_groundwater');
            $table->double('swater_sufacewater');
            $table->double('totaldisDome');
            $table->double('totaldisIndu');
            $table->string('finalpointofDischarge_ww',254);
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
        Schema::drop('water');
    }
}
