<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHwmLicenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hwm_licence', function (Blueprint $table) {
            $table->increments('hwm_id');
            $table->integer('industryID')->unsigned();
            $table->string('scode');
            $table->integer('categoryID');
            $table->integer('applicationtype')->unsigned();
            $table->integer('hwmcat_id')->unsigned();
            $table->string('waste_type',254);
            $table->double('waste_qty');
            $table->boolean('sludge_generated_hazardous');
            $table->double('sludge_generated_hazardous_qty');
            $table->string('sludge_generated_hazardous_dischargemode',254);
            $table->boolean('sludge_generated_nonhazardous');
            $table->double('sludge_generated_nonhazardous_qty');
            $table->string('sludge_generated_nonhazardous_dischargemode',254);
            $table->string('qualification',254);
            $table->string('insurance_coverdetails',254);
            $table->string('security_emergency_procedures',254);
            $table->string('wasteaccidentresults_information',254);
            $table->string('healthandsafety',254);
            $table->string('waste_category_schedVIII',254);
            $table->string('quality_wastehandled',254);
            $table->double('quantity_wastehandled');
            $table->string('operationsystem_details',254);
            $table->integer('collector_id')->unsigned();
            $table->integer('transporter_id')->unsigned();
            $table->integer('store_id')->unsigned();
            $table->integer('rr_id')->unsigned();
            $table->integer('disposer_id')->unsigned();
        });
            DB::statement("ALTER TABLE hwm_licence ADD importantenvironmentalfeatures LONGBLOB");
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
