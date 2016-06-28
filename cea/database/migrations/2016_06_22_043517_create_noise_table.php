<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noise', function (Blueprint $table) {
            $table->increments('noise_id');
            $table->integer('industryID')->unsigned();
            $table->integer('epl_licence_id')->unsigned();              
            $table->string('noise_pollution_source',254);
            $table->string('noise_pollution_method',254);                   
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
        Schema::drop('noise');
    }
}
