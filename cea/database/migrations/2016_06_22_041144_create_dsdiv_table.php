<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDsdivTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dsdiv', function (Blueprint $table) {
            $table->increments('dsd_id');
            $table->char('lacode',3);
            $table->char('prcode',2);
            $table->char('dicode',2);
            $table->string('dsdcode',5);
            $table->string('dsdnamename',45);
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
        Schema::drop('dsdiv');
    }
}
