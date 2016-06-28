<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHwmRecyclerRecovererTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hwm_recycler_recoverer', function (Blueprint $table) {
            $table->increments('rr_id');
            $table->integer('industryID')->unsigned();
            $table->integer('hwm_id')->unsigned();  
            $table->string('location_recycling_recover_facility',254);
            $table->string('recycling_recovery_method',254);
            $table->string('purpose_rr_marketavailability',254);
            $table->string('emergencymeasures_precautions',254);                  
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
        Schema::drop('hwm_recycler_recoverer');
    }
}
