<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterIndustryEplContactinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('industry_epl_contactinfo', function (Blueprint $table) {
            $table->foreign('industryID')->references('industryID')->on('industry');  
            $table->foreign('epl_licence_id')->references('applicationID')->on('epl_licence');           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('industry_epl_contactinfo', function (Blueprint $table) {
            //
        });
    }
}