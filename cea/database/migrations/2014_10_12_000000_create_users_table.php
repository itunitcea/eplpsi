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
