<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterInsgroupofficerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('insgroupofficer', function (Blueprint $table) {
<<<<<<< HEAD
            //$table->foreign('userID')->references('user_id')->on('users');
=======
            $table->foreign('userID')->references('user_id')->on('users');
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
            $table->foreign('insgroupID')->references('insgroupID')->on('inspectiongroup');  
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
        Schema::drop('insgroupofficer');
=======
        Schema::table('insgroupofficer', function (Blueprint $table) {
            //
        });
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
    }
}
