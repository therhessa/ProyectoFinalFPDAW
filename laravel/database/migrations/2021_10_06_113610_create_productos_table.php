<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->integer('id_fruitstore');
            $table->String ('prod_name');
            $table->String('prod_description');
            $table->double('prod_price');
            $table->integer('stock');
            $table->bigInteger('id_category')->unsigned();
            $table->foreign('id_category')->references('id')->on('categorias');
            $table->integer('prod_visible');
            $table->integer('prod_delete');
            $table->string('image');


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
        Schema::dropIfExists('productos');
    }
}
