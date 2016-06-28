<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayrefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payref', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fileno',45);
            $table->integer('officeid')->unsigned();
            $table->integer('paytypeid');
            $table->string('payref',45);
            $table->integer('feeid');
            $table->double('amount');
            $table->double('nbt');
            $table->double('vat');
            $table->double('stamp');
            $table->double('totamt');
            $table->date('gendate');
            $table->string('userid',45);
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
        Schema::drop('payref');
    }
}
