<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
             $table->string('pcode');
            $table->integer('category')->unsigned();
            $table->string('pname');
            $table->string('pcompany');
            $table->string('pmodel');
            $table->string('pserial');
            $table->string('pcondition');
            $table->string('pdate');
            $table->string('pdescription');
            $table->string('pinvoice');
            $table->string('sip');
            $table->string('addedby');

            $table->timestamps();
        });
         Schema::table('products', function($table) {
            $table->foreign('category')->references('id')->on('product_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
