<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
Full texts  
id
member_id
date
time
type
location
longitude
latitude
sip
session_id
datesort
remark
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->string('date');
            $table->string('time');
            $table->string('type');
            $table->string('location');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('sip');
            $table->string('session_id');
            $table->string('datesort');
            $table->string('remark');
           
            $table->timestamps();
        });
         Schema::table('attendances', function($table) {
            $table->foreign('member_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
