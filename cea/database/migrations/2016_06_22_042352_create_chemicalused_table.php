<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChemicalusedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chemicalused', function (Blueprint $table) {
            $table->increments('chemicalID');
            $table->integer('industryID')->unsigned(); 
            $table->string('chemicalname',254);  
            $table->string('trdename',254);     
            $table->double('quantity');      
            $table->string('purpose',254); 
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
        Schema::drop('chemicalused');
    }
}
