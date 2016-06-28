<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManufactureprocessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufactureprocess', function (Blueprint $table) {
            $table->increments('mp_id');
            $table->integer('industryID')->unsigned();
            $table->integer('rawmaterialsID')->unsigned();
            $table->integer('chemicalID')->unsigned();
            $table->integer('productID')->unsigned();
            $table->string('desc',254);
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
        Schema::drop('manufactureprocess');
    }
}
