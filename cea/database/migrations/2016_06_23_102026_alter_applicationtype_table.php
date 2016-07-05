<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterApplicationtypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applicationtype', function (Blueprint $table) {
            $table->foreign('epl_licence_id')->references('applicationID')->on('epl_licence');
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
        Schema::drop('applicationtype');
=======
        Schema::table('applicationtype', function (Blueprint $table) {
            //
        });
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
    }
}
