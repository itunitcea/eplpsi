<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalauthorityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localauthority', function (Blueprint $table) {
            $table->char('lacode',3)->unique();
            $table->char('prcode',2);
            $table->char('dicode',2);
            $table->string('laname',45);   
            $table->increments('lid');        
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
        Schema::drop('localauthority');
    }
}
