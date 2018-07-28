<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('assigned_user');
            $table->integer('product_cat')->unsigned();
            $table->string('product_desc');
            $table->string('date');
            $table->string('remark');
            $table->string('assignedby');
            $table->timestamps();
        });

        Schema::table('assign_products', function($table) {
            $table->foreign('product_cat')->references('id')->on('product_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assign_products');
    }
}
