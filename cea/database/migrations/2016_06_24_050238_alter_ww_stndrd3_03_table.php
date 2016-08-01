<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterWwStndrd303Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ww_stndrd3_03', function (Blueprint $table) {
            $table->foreign('industryID')->references('industryID')->on('industry');  
            $table->foreign('epl_licence_id')->references('applicationID')->on('epl_licence');           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ww_stndrd3_03');
    }
}
