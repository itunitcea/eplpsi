<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterGndTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gnd', function (Blueprint $table) {
            $table->foreign('prcode')->references('prcode')->on('province');
            $table->foreign('dicode')->references('dicode')->on('district');
            $table->foreign('lacode')->references('lacode')->on('localauthority');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gnd', function (Blueprint $table) {
            //
        });
    }
}
