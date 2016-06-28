<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploadfiles', function (Blueprint $table) {
            $table->integer('fileID'); 
            $table->primary('fileID');         
            $table->string('filetype'); 
            $table->date('uploaddate');                        
            $table->timestamps();
        });
        DB::statement("ALTER TABLE uploadfiles ADD file LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('uploadfiles');
    }
}
