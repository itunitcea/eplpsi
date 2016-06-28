<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemindersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reminders', function (Blueprint $table) {
            $table->increments('reminderID');
            $table->integer('industryID')->unsigned();
            $table->integer('epl_licence_id')->unsigned();
            $table->date('dueDate');
            $table->integer('reminderType');
            $table->integer('reminderStatus');
            $table->date('reminderDate');
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
        Schema::drop('reminders');
    }
}
