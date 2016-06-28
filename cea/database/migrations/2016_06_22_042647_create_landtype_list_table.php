<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandtypeListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landtype_list', function (Blueprint $table) {
            $table->increments('landarea_list');
            $table->integer('industryID')->unsigned();
            $table->string('landtype',45);
            $table->string('landname',254);
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
        Schema::drop('landtype_list');
    }
}
