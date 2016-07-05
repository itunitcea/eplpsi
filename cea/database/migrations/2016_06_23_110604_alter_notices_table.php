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
<<<<<<< HEAD
            $table->foreign('epl_licence_id')->references('applicationID')->on('epl_licence');
=======
            $table->foreign('epl_licence_id')->references('applicationID')->on('epl_licence'); 
            $table->foreign('senderID')->references('user_id')->on('users');  
            $table->foreign('receiverID')->references('user_id')->on('users');           

>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
        Schema::drop('notices');
=======
        Schema::table('notices', function (Blueprint $table) {
            //
        });
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
    }
}
