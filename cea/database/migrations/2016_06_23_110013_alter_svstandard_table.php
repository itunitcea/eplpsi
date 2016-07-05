<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSvstandardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('svstandard', function (Blueprint $table) {
<<<<<<< HEAD
            //$table->foreign('officerID')->references('user_id')->on('users');
=======
            $table->foreign('officerID')->references('user_id')->on('users');
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
            $table->foreign('applicationID')->references('applicationID')->on('epl_licence');
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
        Schema::drop('svstandard');
=======
        Schema::table('svstandard', function (Blueprint $table) {
            //
        });
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
    }
}
