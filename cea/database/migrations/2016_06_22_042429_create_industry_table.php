<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industry', function (Blueprint $table) {
            $table->increments('industryID');
            $table->char('provincecode');
            $table->char('districtcode');
            $table->integer('laid')->unsigned();
            $table->integer('gnd_id')->unsigned();
            $table->integer('dsd_id')->unsigned(); 
            $table->string('sector');  
            $table->integer('eplcategoryid')->unsigned();
            $table->integer('hwmcat_id')->unsigned();
            $table->integer('officeID')->unsigned();
            $table->string('user_id');
            $table->string('cust_id');
            $table->integer('epl_licence_id')->unsigned();
            $table->integer('hwm_id')->unsigned();
            $table->integer('indhwmcontact_id')->unsigned();
            $table->integer('ind_eplcontact_id')->unsigned();
            $table->integer('security_id')->unsigned();
            $table->integer('landarea_list')->unsigned();
            $table->integer('mp_id')->unsigned();
            $table->integer('fid')->unsigned();
            $table->string('industryName'); 
            $table->string('industrytype');
            $table->string('industrynature'); 
            $table->string('indadd1');
            $table->string('indadd2');
            $table->string('indadd3');
            $table->string('E',45);
            $table->string('N',45);
            $table->string('language');
            $table->integer('insGrpID');
            $table->string('EmeCntname',254); 
            $table->string('EmeCntactTel',254); 
            $table->string('EmeCntactMob',45);
            $table->boolean('BOIregistration');
            $table->string('recycle',254);
            $table->double('noOfShift'); 
            $table->double('noOfWorkersEachShift');
            $table->string('landUseWithIn5Km');
            $table->string('landAvailableForTreatmantPlant');
            $table->boolean('isWithinIndustrialZone');
            $table->boolean('wastewater');
            $table->boolean('hazardouswaste');
            $table->boolean('solidwaste');
            $table->boolean('noise');
            $table->boolean('airemission');
            $table->double('localinvestment'); 
            $table->double('foreigninvestment');
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
        Schema::drop('industry');
    }
}
