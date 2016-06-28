<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterLocalauthorityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('localauthority', function (Blueprint $table) {
            $table->foreign('prcode')->references('prcode')->on('province');
            $table->foreign('dicode')->references('dicode')->on('district');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('localauthority', function (Blueprint $table) {
            //
        });
    }
}
