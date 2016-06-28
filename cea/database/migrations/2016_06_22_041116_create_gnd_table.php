<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGndTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gnd', function (Blueprint $table) {
            $table->increments('gnd_id');
            $table->char('lacode',3);
            $table->char('prcode',2);
            $table->char('dicode',2);
            $table->string('gnd_name',45);
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
        Schema::drop('gnd');
    }
}
