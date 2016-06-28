<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterEpaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('epayment', function (Blueprint $table) {
            $table->foreign('cust_id')->references('cust_id')->on('customer');
            $table->foreign('feeno')->references('fno')->on('fee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('epayment', function (Blueprint $table) {
            //
        });
    }
}
