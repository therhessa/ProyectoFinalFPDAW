<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('id_order')->unsigned();
            $table->foreign('id_order')->references('id')->on('pedidos');
            $table->bigInteger('id_product')->unsigned();
            $table->foreign('id_product')->references('id')->on('productos');
            $table->integer('quantity');
            $table->double('total_price');
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
        Schema::dropIfExists('detalles');
    }
}
