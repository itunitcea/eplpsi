<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWwStndrd709Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ww_stndrd7_09', function (Blueprint $table) {
            $table->increments('stndrd7_09_id');
            $table->integer('industryID')->unsigned();
            $table->integer('epl_licence_id')->unsigned();
            $table->integer('w_id')->unsigned();
            $table->string('monitoring',245);
            $table->char('year',4);
            $table->integer('quarter');
            $table->double('ddischarge_domestic');
            $table->double('ddischarge_industry');
            $table->double('tss');
            $table->double('tot_dissolvedsolids');
            $table->double('pH_ambienttemp');
            $table->double('bod');
            $table->double('temp_discharge');
            $table->double('oil_greases');
            $table->double('phenolic_oh');
            $table->double('cod');
            $table->double('colour_yellow');
            $table->double('colour_red');
            $table->double('colour_blue');
            $table->double('totalKjeldahlN');
            $table->double('free_ammonia');
            $table->double('ammoniacal_N');
            $table->double('cn');
            $table->double('total_residualchlorine');
            $table->double('fluoride');
            $table->double('sulphide');
            $table->double('chlorides');
            $table->double('sulphates');
            $table->double('boron');
            $table->double('arsenic');
            $table->double('cadmium');
            $table->double('chromiumtot');
            $table->double('copper');
            $table->double('lead');
            $table->double('mercury_hg');
            $table->double('nickel');
            $table->double('selenium');
            $table->double('zinc');
            $table->double('pesticides');
            $table->double('detergents_surfactants');
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
        Schema::drop('ww_stndrd7_09');
    }
}
