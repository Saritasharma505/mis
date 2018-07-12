<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id', true);
            $table->integer('user_id')->unsigned();
            $table->string('firstname');
            $table->string('role');
            $table->string('lastname');
            $table->string('username');
            $table->string('password');
            $table->string('doj');
            $table->string('designation');
            $table->string('department');
            $table->string('did');
            $table->string('gender');
            $table->string('dob');
            $table->string('bank');
            $table->string('accountno');
            $table->string('pan');
            $table->string('cstreet');
            $table->string('ccity');
            $table->string('cstate');
            $table->string('pstreet');
            $table->string('pcity');
            $table->string('pstate');
            $table->integer('mobile');
            $table->string('altno');
            $table->string('fname');
            $table->string('foccup');
            $table->string('fcontact');
            $table->string('mname');
            $table->string('moccup');
            $table->string('mcontact');
            $table->string('maritalstatus');
            $table->string('spname');
            $table->string('spoccup');
            $table->string('sip');
            $table->string('time');
            $table->string('locationcentre');
            $table->string('anniversary');
            $table->string('allinfo');
            $table->string('status');
          
            $table->timestamps();
        });

        Schema::table('user_details', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
