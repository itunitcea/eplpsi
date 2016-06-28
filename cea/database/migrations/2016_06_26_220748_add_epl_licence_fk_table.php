<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEplLicenceFkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('epl_licence', function (Blueprint $table) {
            $table->string('userID',45)->change();
            $table->foreign('userID')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('epl_licence', function (Blueprint $table) {
            //
        });
    }
}
