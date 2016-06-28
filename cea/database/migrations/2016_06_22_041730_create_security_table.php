<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecurityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('security', function (Blueprint $table) {
            $table->increments('securityID');
            $table->integer('industryID')->unsigned();
            $table->string('precautionarymeasures',254); 
            $table->string('storage_facilities',254); 
            $table->boolean('firefightingequipment');
            $table->string('detailsofequip',254);
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
        Schema::drop('security');
    }
}
