<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsgroupofficerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insgroupofficer', function (Blueprint $table) {
            $table->string('userID',45); 
            $table->integer('insgroupID')->unsigned();
            $table->primary(['userID','insgroupID']);
            $table->string('descr');          
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
        Schema::drop('insgroupofficer');
    }
}
