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
            $table->increments('id');
            $table->string('referencia');
            $table->string('nombre');
            $table->string('descripcion')->nullable($value = true);
            $table->integer('stock')->nullable($value = true);
            $table->string('valor')->nullable($value = true);
            $table->integer('idcategoria');
            $table->integer('idproductopadre')->nullable($value = true);
            $table->boolean('estado')->default(1);
            $table->timestamps();
            $table->softDeletes();
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
