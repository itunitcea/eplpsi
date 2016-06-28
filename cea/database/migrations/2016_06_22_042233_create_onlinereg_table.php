<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineregTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlinereg', function (Blueprint $table) {
            $table->increments('regID');
            $table->integer('officeID')->unsigned();
            $table->integer('userType');
            $table->string('custCode');
            $table->string('regName',254);
            $table->string('regAddr1',254);
            $table->string('regAddr2',254);
            $table->string('regCity',45);
            $table->string('regCntNo',45);
            $table->string('regEmail',45);
            $table->string('passwd',45);
            $table->string('regMobileNo',45);
            $table->string('regBRNo',45);
            $table->string('user_id',45);
            $table->integer('scope');
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
        Schema::drop('onlinereg');
    }
}
