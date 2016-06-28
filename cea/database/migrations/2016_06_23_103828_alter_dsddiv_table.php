<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDsddivTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dsdiv', function (Blueprint $table) {
            $table->foreign('prcode')->references('prcode')->on('province');
            $table->foreign('dicode')->references('dicode')->on('district');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dsdiv', function (Blueprint $table) {
            //
        });
    }
}
