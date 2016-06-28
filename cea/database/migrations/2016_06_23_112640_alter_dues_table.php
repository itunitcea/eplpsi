<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dues', function (Blueprint $table) {
            $table->foreign('industryID')->references('industryID')->on('industry');
            $table->foreign('epl_licence_id')->references('applicationID')->on('epl_licence'); 
            $table->foreign('officeID')->references('officeID')->on('office');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dues', function (Blueprint $table) {
            //
        });
    }
}
