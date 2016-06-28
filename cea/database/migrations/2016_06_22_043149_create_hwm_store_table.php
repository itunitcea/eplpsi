<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHwmStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hwm_store', function (Blueprint $table) {
            $table->increments('store_id');
            $table->integer('industryID')->unsigned();
            $table->integer('hwm_id')->unsigned();  
            $table->string('location_extent_storagesite',254);
            $table->string('packaging_type',254);
            $table->string('wastestorage_timeperiod',254);
            $table->string('recycling_recovering_wastedisposal_info',254);
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
        Schema::drop('hwm_store');
    }
}
