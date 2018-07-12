<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnDutiesTable extends Migration
{
    /**
     * Run the migrations.
Full texts  
id Ascending 1
empname
empid
empemail
empmobile
od_date
date
intime
outtime
odtype
reason
approvalfrom
status
time
sip
     *
     * @return void
     */
    public function up()
    {
        Schema::create('on_duties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empid')->unsigned();
            $table->string('empname');
            $table->string('empemail');
            $table->string('empmobile');
            $table->string('od_date');
            $table->string('date');
            $table->string('intime');
            $table->string('outtime');
            $table->string('odtype');
            $table->string('reason');
            $table->string('approvalfrom');
            $table->string('status');
            $table->string('sip');
            $table->timestamps();
        });

         Schema::table('on_duties', function($table) {
            $table->foreign('empid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('on_duties');
    }
}
