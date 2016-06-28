<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee', function (Blueprint $table) {
            $table->increments('fno');
            $table->integer('industryID')->unsigned();
            $table->integer('feeID')->unsigned(); 
            $table->integer('epl_licence_id')->unsigned();
            $table->date('dateofpayments');
            $table->string('reciptNo',45);  
            $table->double('paidamount');
            $table->string('feestatus',45);
            $table->date('calDate');
            $table->double('calAmount');
            $table->string('TranNo',45);   
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
        Schema::drop('fee');
    }
}
