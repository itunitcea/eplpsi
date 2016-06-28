<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolidwasteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solidwaste', function (Blueprint $table) {
            $table->increments('sw_id');
            $table->integer('industryID')->unsigned();
            $table->integer('epl_licence_id')->unsigned();              
            $table->string('natureOfSolidWaste',254);
            $table->double('total_qty_sw');
            $table->string('sw_disposal_method',254);
            $table->double('biodeg_waste');
            $table->double('recyc_polythene');
            $table->double('recyc_plastic');
            $table->double('recyc_glass');
            $table->double('recyc_metal');
            $table->double('recyc_paper');
            $table->string('other',254);
            $table->string('detailsofWaterCollector',254);
            $table->double('wasteqty_LA');
            $table->string('wastetype_LA',254);
            $table->string('wm_issues',254);
            $table->string('suggestions',254);
            $table->string('responsible_officer',254);
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
        Schema::drop('solidwaste');
    }
}
