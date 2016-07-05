<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterHwmStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hwm_store', function (Blueprint $table) {
            $table->foreign('industryID')->references('industryID')->on('industry');  
            $table->foreign('hwm_id')->references('hwm_id')->on('hwm_licence'); 
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
        Schema::drop('hwm_store');
=======
        Schema::table('hwm_store', function (Blueprint $table) {
            //
        });
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
    }
}
