<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHwmCollectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hwm_collector', function (Blueprint $table) {
            $table->increments('collector_id');
            $table->integer('industryID')->unsigned();
            $table->integer('hwm_id')->unsigned();  
            $table->string('siteloc_name',254);
            $table->string('siteloc_address1',254);
            $table->string('siteloc_address2',254);
            $table->string('siteloc_addressCity',254);
            $table->string('proposeddates_frequency',254);
            $table->double('est_quantity_collected');
            $table->string('packagingtype',254);                   
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
        Schema::drop('hwm_collector');
    }
}
