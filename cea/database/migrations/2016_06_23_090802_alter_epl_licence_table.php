<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterEplLicenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('epl_licence', function (Blueprint $table) {
            $table->foreign('industryID')
                ->references('industryID')
                ->on('industry');
            $table->foreign('w_id')->references('w_id')->on('water');
            $table->foreign('sw_id')->references('sw_id')->on('solidwaste');
            $table->foreign('ai_id')->references('ai_id')->on('atmospheric_emission');
            $table->foreign('noise_id')->references('noise_id')->on('noise');
            $table->foreign('er_id')->references('er_id')->on('energy_reqt');
            $table->foreign('eplcategoryID')->references('idno')->on('epl_category');
            $table->foreign('applicationtype')->references('apptypeID')->on('applicationtype');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('epl_licence', function (Blueprint $table) {
            //
        });
    }
}
