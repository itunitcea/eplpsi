<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilenorefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filenoref', function (Blueprint $table) {
            $table->char('prcode',2);
            $table->primary('prcode');
            $table->integer('fileno');                      
            $table->string('fndesc',45);  
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
        Schema::drop('filenoref');
    }
}
