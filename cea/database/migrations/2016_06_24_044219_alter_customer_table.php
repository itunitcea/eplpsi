<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customer', function (Blueprint $table) {
<<<<<<< HEAD
            //$table->foreign('officeID')->references('officeID')->on('office');
=======
            $table->foreign('officeID')->references('officeID')->on('office');
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
            $table->foreign('groupname')->references('groupname')->on('inspectiongroup');
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
        Schema::drop('customer');
=======
        Schema::table('customer', function (Blueprint $table) {
            //
        });
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
    }
}
