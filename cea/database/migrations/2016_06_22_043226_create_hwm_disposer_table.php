<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHwmDisposerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hwm_disposer', function (Blueprint $table) {
            $table->increments('disposer_id');
            $table->integer('industryID')->unsigned();
            $table->integer('hwm_id')->unsigned();  
            $table->string('location_disposalsite',254);
            $table->string('disposalmethod',254);
            $table->string('treatmentprocess_desc',254);
            $table->string('emergencymeasures_precautions',254);
            $table->string('disposalsite_info',254);                  
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
        Schema::drop('hwm_disposer');
    }
}
