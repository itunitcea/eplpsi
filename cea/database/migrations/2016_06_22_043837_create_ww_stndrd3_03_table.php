<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWwStndrd303Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ww_stndrd3_03', function (Blueprint $table) {
            $table->increments('stndrd3_03_id');
            $table->integer('industryID')->unsigned();
            $table->integer('epl_licence_id')->unsigned();
            $table->integer('w_id')->unsigned();
            $table->string('monitoring',245);
            $table->char('year',4);
            $table->integer('quarter');
            $table->double('ddischarge_domestic');
            $table->double('ddischarge_industry');
            $table->double('tss');
            $table->double('ps_tss_floatable_solid');
            $table->double('ps_tss_settlable_solid');
            $table->double('pH_ambienttemp');
            $table->double('bod');
            $table->double('temp_discharge');
            $table->double('oil_greases');
            $table->double('phenolic_oh');
            $table->double('cod');
            $table->double('organo_ph_compounds');
            $table->double('ammoniacal_N');
            $table->double('cn');
            $table->double('total_residualchlorine');
            $table->double('fluoride');
            $table->double('sulphide');
            $table->double('cl_hydrocarbons');
            $table->double('arsenic');
            $table->double('cadmium');
            $table->double('chromiumtot');
            $table->double('chromium_cr6');
            $table->double('copper');
            $table->double('lead');
            $table->double('mercury_hg');
            $table->double('nickel');
            $table->double('selenium');
            $table->double('zinc');
            $table->double('pesticides');
            $table->double('faecalcoliform');
            $table->double('ram_alphaemitters');
            $table->double('ram_betaemitters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ww_stndrd3_03');
    }
}
