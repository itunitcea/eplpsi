<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->string('cust_id')->unique();
            $table->primary('cust_id');
            $table->string('groupname');
            $table->string('password',254)->bcrypt();
            $table->integer('scope');
            $table->integer('officeID');
            $table->string('user_name',145);
            $table->string('userAdd1',254);
            $table->string('userAdd2',254);
            $table->string('userCity',254); 
            $table->string('userTel',10);
            $table->string('userMob',10);
            $table->string('uuid',45);
            $table->string('userEmail',45);            
            $table->boolean('active')->default(true);
            $table->integer('eplauthority')->unsigned();
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
        Schema::drop('customer');
    }
}
