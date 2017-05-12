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
            $table->increments('idProduct');
            $table->integer('idProvince');
            $table->integer('idGroup');
            $table->integer('idDetail');
            $table->float('price');
            $table->string('status');
            $table->string('soluong');
            $table->string('khoiluong');
            $table->string('MSP');
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
        Schema::dropIfExists('products');
    }
}
