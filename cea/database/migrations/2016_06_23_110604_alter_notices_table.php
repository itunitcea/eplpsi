<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notices', function (Blueprint $table) {
            $table->foreign('industryID')->references('industryID')->on('industry');  
            $table->foreign('epl_licence_id')->references('applicationID')->on('epl_licence'); 
            $table->foreign('senderID')->references('user_id')->on('users');  
            $table->foreign('receiverID')->references('user_id')->on('users');           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notices', function (Blueprint $table) {
            //
        });
    }
}
