<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationtypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationtype', function (Blueprint $table) {
            $table->increments('apptypeID');
            $table->string('applicationtype',45);
            $table->integer('epl_licence_id')->unsigned();
            $table->integer('hwm_id')->unsigned();          
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
        Schema::drop('applicationtype');
    }
}
