<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterHwmLicenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hwm_licence', function (Blueprint $table) {
            $table->foreign('industryID')->references('industryID')->on('industry');
            $table->foreign('scode')->references('scode')->on('sector');
            $table->foreign('applicationtype')->references('apptypeID')->on('applicationtype');
            $table->foreign('hwmcat_id')->references('hwmcat_id')->on('hwm_category');
            $table->foreign('collector_id')->references('collector_id')->on('hwm_collector');
            $table->foreign('transporter_id')->references('transporter_id')->on('hwm_transporter');
            $table->foreign('store_id')->references('store_id')->on('hwm_store');
            $table->foreign('rr_id')->references('rr_id')->on('hwm_recycler_recoverer');
            $table->foreign('disposer_id')->references('disposer_id')->on('hwm_disposer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hwm_licence');
    }
}
