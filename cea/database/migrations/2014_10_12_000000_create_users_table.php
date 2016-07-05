<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('users', function (Blueprint $table) {
<<<<<<< HEAD
            $table->increments('user_id');
            $table->string('userType',45)->nullable();
            $table->string('groupname',254)->nullable();
            $table->string('password',60)->nullable();
            $table->integer('scope')->nullable();
            $table->integer('officeID')->nullable();
            $table->string('user_name',45);
            $table->string('userAdd1',45)->nullable();
            $table->string('userAdd2',45)->nullable();
            $table->string('userCity',45)->nullable();
            $table->string('userTel',10)->nullable();
            $table->string('userMob',10)->nullable();
            $table->string('uuid',45)->nullable();
            $table->string('email',45);
            $table->boolean('active')->default(true);
            $table->integer('eplauthority')->nullable();
=======
            $table->string('user_id');
            $table->primary('user_id');
            $table->string('userType',45);
            $table->string('groupname',254);
            $table->string('password',60);
            $table->integer('scope');
            $table->integer('officeID')->unsigned();
            $table->string('user_name',45);
            $table->string('userAdd1',45);
            $table->string('userAdd2',45);
            $table->string('userCity',45); 
            $table->string('userTel',10);
            $table->string('userMob',10);
            $table->string('uuid',45);
            $table->string('userEmail',45);            
            $table->boolean('active')->default(true);
            $table->integer('eplauthority');
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
