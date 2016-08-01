<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSvstandardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('svstandard', function (Blueprint $table) {
            //$table->foreign('officerID')->references('user_id')->on('users');
            $table->foreign('applicationID')->references('applicationID')->on('epl_licence');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('svstandard');
    }
}
