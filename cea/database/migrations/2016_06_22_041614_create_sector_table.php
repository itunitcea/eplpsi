<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sector', function (Blueprint $table) {
            $table->char('scode',2);
            $table->primary('scode');     
            $table->string('sdescription',245);  
            $table->string('Alistnorange',45);       
            $table->string('Blistnorange',45);  
            $table->string('Clistnorange',45);      
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
        Schema::drop('sector');
    }
}
