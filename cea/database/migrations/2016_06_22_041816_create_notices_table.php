<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->increments('noticeID');
            $table->integer('industryID')->unsigned();
            $table->integer('epl_licence_id')->unsigned();
<<<<<<< HEAD
            $table->integer('senderID');
            $table->integer('receiverID');
=======
            $table->string('senderID');
            $table->string('receiverID');
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
            $table->datetime('sendDate');
            $table->datetime('readDate');
            $table->integer('stat');
            $table->string('message',45);           
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
        Schema::drop('notices');
    }
}
