<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dues', function (Blueprint $table) {
            $table->integer('industryID')->unsigned();
            $table->integer('reminderType');
            $table->primary(['industryID','reminderType']);
            $table->date('dueDate');
            $table->integer('dueStatus');
            $table->date('recievedDate');
            $table->integer('epl_licence_id')->unsigned();
            $table->date('nxtRemDate');
            $table->integer('officeID')->unsigned();                  
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
        Schema::drop('dues');
    }
}
