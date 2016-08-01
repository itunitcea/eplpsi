<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterInsgroupofficerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('insgroupofficer', function (Blueprint $table) {
            //$table->foreign('userID')->references('user_id')->on('users');
            $table->foreign('insgroupID')->references('insgroupID')->on('inspectiongroup');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('insgroupofficer');
    }
}
