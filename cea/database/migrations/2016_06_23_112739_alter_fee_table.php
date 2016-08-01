<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterFeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fee', function (Blueprint $table) {
            $table->foreign('industryID')->references('industryID')->on('industry'); 
            $table->foreign('feeID')->references('feeID')->on('feetype'); 
            $table->foreign('epl_licence_id')->references('applicationID')->on('epl_licence');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fee');
    }
}
