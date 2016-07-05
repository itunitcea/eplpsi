<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dues', function (Blueprint $table) {
            $table->foreign('industryID')->references('industryID')->on('industry');
            $table->foreign('epl_licence_id')->references('applicationID')->on('epl_licence'); 
<<<<<<< HEAD
            //$table->foreign('officeID')->references('officeID')->on('office');
=======
            $table->foreign('officeID')->references('officeID')->on('office');
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
        Schema::drop('dues');
=======
        Schema::table('dues', function (Blueprint $table) {
            //
        });
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
    }
}
