<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
Full texts  
id
leaveid
empid
empname
empemail
empmobile
leavefrom
leaveto
totalleave
leavetype
agcompoffdate
reason
approvalfrom
approvedby
disapprovedby
pendingby
comment
status
date1
monyear
sip
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('leaveid');
            $table->integer('empid')->unsigned();
            $table->string('empname');
            $table->string('empemail');
            $table->string('empmobile');
            $table->string('leavefrom');
            $table->string('leaveto');
            $table->string('totalleave');
            $table->string('leavetype');
            $table->string('agcompoffdate');
            $table->string('reason');
            $table->string('approvalfrom');
            $table->string('approvedby');
            $table->string('disapprovedby');
            $table->string('pendingby');
            $table->string('comment');
            $table->string('status')->default('active');

            $table->string('sip');
            $table->timestamps();
        });
         Schema::table('leaves', function($table) {
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
        Schema::dropIfExists('leaves');
    }
}
