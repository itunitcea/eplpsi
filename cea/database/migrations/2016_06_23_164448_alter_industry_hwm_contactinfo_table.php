<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterIndustryHwmContactinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('industry_hwm_contactinfo', function (Blueprint $table) {
            $table->foreign('industryID')->references('industryID')->on('industry');
            $table->foreign('hwm_id')->references('hwm_id')->on('hwm_licence');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('industry_hwm_contactinfo', function (Blueprint $table) {
            //
        });
    }
}
