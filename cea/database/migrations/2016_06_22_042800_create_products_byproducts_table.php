<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsByproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_byproducts', function (Blueprint $table) {
            $table->increments('productID');
            $table->integer('industryID')->unsigned();
            $table->string('product_byproducts_name',254);  
            $table->string('qty',254);  
            $table->string('productstatus',45);           
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
        Schema::drop('products_byproducts');
    }
}
