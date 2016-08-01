<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSvstandardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('svstandard', function (Blueprint $table) {
            $table->increments('officerID');
            $table->integer('applicationID')->unsigned(); 
            $table->date('appRcvd');
            $table->date('insFeeRequest'); 
            $table->date('insFeeRcvd'); 
            $table->date('fileHanded'); 
            $table->date('inspected'); 
            $table->date('eplfeeRequest'); 
            $table->date('eplfeeRcvd'); 
            $table->date('eplIssued'); 
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
        Schema::drop('svstandard');
    }
}
