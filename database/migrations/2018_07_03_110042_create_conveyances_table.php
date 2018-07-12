<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConveyancesTable extends Migration
{
    /**
     * Run the migrations.
Full texts  
member_id  Ascending 1
reason
user_id
disfrom
disto
mode
distance
amount
con_date
status
paid
uploadcimg
comments
conpid
concrdate
edit_time
sip
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conveyances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reason')->default(null);
            $table->integer('user_id')->unsigned();
            $table->string('disfrom')->default(null);
            $table->string('disto')->default(null);
            $table->string('mode')->default(null);
            $table->string('distance')->default(null);
            $table->string('amount')->default(null);
            $table->string('con_date')->default(null);
            $table->string('status')->default(null);
            $table->string('paid')->default(null);
            $table->string('uploadcimg')->default(null);
            $table->string('comments')->default(null);
            $table->string('conpid')->default(null);
            $table->string('sip')->default(null);

            $table->timestamps();
        });

         Schema::table('conveyances', function($table) {
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
        Schema::dropIfExists('conveyances');
    }
}
