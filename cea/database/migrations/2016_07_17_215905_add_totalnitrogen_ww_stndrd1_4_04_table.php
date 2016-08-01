<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTotalnitrogenWwStndrd1404Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ww_stndrd1_4_04', function (Blueprint $table) {
            $table->double('totalnitrogen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ww_stndrd1_4_04', function (Blueprint $table) {
            //
        });
    }
}
