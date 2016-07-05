<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterWwStndrd101Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ww_stndrd1_01', function (Blueprint $table) {
            $table->foreign('industryID')->references('industryID')->on('industry');  
<<<<<<< HEAD
            $table->foreign('epl_licence_id')->references('applicationID')->on('epl_licence');
=======
            $table->foreign('epl_licence_id')->references('applicationID')->on('epl_licence');           
            $table->foreign('w_id')->references('w_id')->on('water');
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83

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
        Schema::drop('ww_stndrd1_01');
=======
        Schema::table('ww_stndrd1_01', function (Blueprint $table) {
            //
        });
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
    }
}
