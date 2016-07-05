<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterRawmaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rawmaterials', function (Blueprint $table) {
            $table->foreign('industryID')->references('industryID')->on('industry');
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
        Schema::drop('rawmaterials');
=======
        Schema::table('rawmaterials', function (Blueprint $table) {
            //
        });
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
    }
}
