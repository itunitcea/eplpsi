<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEplLicenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('epl_licence', function (Blueprint $table) {
            $table->integer('userID')->unsigned();
            $table->string('remarks',254);
            $table->string('eplno',254);
            $table->string('ApplicantName');
            $table->string('Address',254);
            $table->string('AddLine1',254);
            $table->string('AddLine2',254);
            $table->string('ContactNo',254);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('epl_licence');
    }
}
