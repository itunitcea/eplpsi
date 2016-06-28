<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWwStndrd202Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ww_stndrd2_02', function (Blueprint $table) {
            $table->increments('stndrd2_02_id');
            $table->integer('industryID')->unsigned();
            $table->integer('epl_licence_id')->unsigned();
            $table->integer('w_id')->unsigned();
            $table->char('year',4);
            $table->integer('quarter');
            $table->double('ddischarge_domestic');
            $table->double('ddischarge_industry');
            $table->double('tss');
            $table->double('pH_ambienttemp');
            $table->double('e_conductivity');
            $table->double('bod');
            $table->double('oil_greases');
            $table->double('cod');
            $table->double('cn');
            $table->double('chlorides');
            $table->double('sulphates');
            $table->double('boron');
            $table->double('arsenic');
            $table->double('cadmium');
            $table->double('chromiumtot');
            $table->double('copper');
            $table->double('lead');
            $table->double('mercury_hg');
            $table->double('sar');
            $table->double('rsc');
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
        Schema::drop('ww_stndrd2_02');
    }
}
