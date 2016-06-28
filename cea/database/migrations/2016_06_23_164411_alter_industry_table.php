<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterIndustryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('industry', function (Blueprint $table) {
            $table->foreign('provincecode')->references('prcode')->on('province');
            $table->foreign('districtcode')->references('dicode')->on('district');
            $table->foreign('laid')->references('lid')->on('localauthority');
            $table->foreign('gnd_id')->references('gnd_id')->on('gnd');
            $table->foreign('dsd_id')->references('dsd_id')->on('dsdiv');
            $table->foreign('sector')->references('scode')->on('sector');
            $table->foreign('eplcategoryID')->references('idno')->on('epl_category');
            $table->foreign('hwmcat_id')->references('hwmcat_id')->on('hwm_category');
            $table->foreign('officeID')->references('officeID')->on('office');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('cust_id')->references('cust_id')->on('customer');
            $table->foreign('epl_licence_id')->references('applicationID')->on('epl_licence');
            $table->foreign('hwm_id')->references('hwm_id')->on('hwm_licence');
            $table->foreign('indhwmcontact_id')->references('indhwmcontact_id')->on('industry_hwm_contactinfo');
            $table->foreign('ind_eplcontact_id')->references('ind_eplcontact_id')->on('industry_epl_contactinfo');
            $table->foreign('security_id')->references('securityID')->on('security');
            $table->foreign('landarea_list')->references('landarea_list')->on('landtype_list');
            $table->foreign('mp_id')->references('mp_id')->on('manufactureprocess');
            $table->foreign('fid')->references('fid')->on('fuel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('industry', function (Blueprint $table) {
            //
        });
    }
}
