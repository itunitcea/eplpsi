<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterManufactureprocessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('manufactureprocess', function (Blueprint $table) {
            $table->foreign('industryID')->references('industryID')->on('industry');
            $table->foreign('rawmaterialsID')->references('materialID')->on('rawmaterials');
            $table->foreign('chemicalID')->references('chemicalID')->on('chemicalused');
            $table->foreign('productID')->references('productID')->on('products_byproducts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('manufactureprocess', function (Blueprint $table) {
            //
        });
    }
}
