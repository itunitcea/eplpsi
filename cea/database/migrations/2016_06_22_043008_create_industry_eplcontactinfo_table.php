<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustryEplcontactinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industry_epl_contactinfo', function (Blueprint $table) {
            $table->increments('ind_eplcontact_id');
            $table->integer('industryID')->unsigned();
            $table->integer('epl_licence_id')->unsigned();
            $table->integer('fileno');
            $table->integer('fileyear');
            $table->string('ApplicantName',100);
            $table->string('AppAddress',254);
            $table->string('AppAddLine1',254);
            $table->string('AppAddLine2',254);
            $table->string('AppContactNo',100);
            $table->string('LIndustryName',100);
            $table->string('LApplicantName',254);
            $table->string('LAppAddress',254);
            $table->string('LAppAddLine1',254);
            $table->string('LAppAddLine2',254);
            $table->date('dateofCommencementofOperation');
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
        Schema::drop('industry_epl_contactinfo');
    }
}
