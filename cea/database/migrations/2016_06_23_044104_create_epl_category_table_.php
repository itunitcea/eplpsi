<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEplCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epl_category', function (Blueprint $table) {
            $table->string('categoryID',45);
            $table->char('listNo',2);   
            $table->string('description');     
            $table->increments('idno');           
            $table->char('abc',2);    
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
        Schema::drop('epl_category');
    }
}
