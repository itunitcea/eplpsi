<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office', function (Blueprint $table) {
            $table->increments('officeID');
            $table->string('officeName'); 
            $table->integer('officetype')->unsigned();
            $table->char('prcode',2);     
            $table->char('dicode',2);  
            $table->string('location'); 
            $table->string('offemail',45);         
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
        Schema::drop('office');
    }
}
