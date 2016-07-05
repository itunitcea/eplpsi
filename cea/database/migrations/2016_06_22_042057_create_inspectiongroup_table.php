<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspectiongroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspectiongroup', function (Blueprint $table) {
            $table->increments('insgroupID');
<<<<<<< HEAD
            $table->integer('officeID');
=======
            $table->integer('officeID')->unsigned();
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
            $table->string('groupname');   
            $table->unique('groupname');       
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
        Schema::drop('inspectiongroup');
    }
}
