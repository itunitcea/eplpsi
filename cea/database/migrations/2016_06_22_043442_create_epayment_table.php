<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epayment', function (Blueprint $table) {
            $table->string('tranno',45);
            $table->primary('tranno',45);
            $table->integer('feeno')->unsigned();
            $table->string('cust_id',45);
            $table->double('pdamt');
            $table->date('pddate');
            $table->boolean('RECstat');
            $table->boolean('tranStat');
            $table->double('conFee');
            $table->string('pgName',45);
            $table->timestamps();
            $table->string('CustName',45);
            $table->string('CustTel',45);
            $table->string('CustEmail',45);
            $table->integer('paytype');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('epayment');
    }
}
