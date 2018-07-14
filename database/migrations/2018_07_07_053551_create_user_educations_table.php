<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEducationsTable extends Migration
{
    /**
     * Run the migrations.postgradegree postgrayear postgrapercentage   postgracoll gradegree   grayear grapercentage   gracoll twelvethschname twelvethschyear twelvethschpercent  tenthschname    tenthschyear    tenthschpercent 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_educations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('edu_option')->unsigned();
            $table->string('course');
            $table->string('strtyear');
            $table->string('endyear');
            $table->string('college');
            $table->string('specialization');
            $table->string('percentage');
            $table->string('addedby');
            $table->string('updatedby');
            $table->string('sip');

            $table->timestamps();
        });

        Schema::table('user_educations', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('user_educations', function($table) {
            $table->foreign('edu_option')->references('id')->on('education_options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_educations');
    }
}
