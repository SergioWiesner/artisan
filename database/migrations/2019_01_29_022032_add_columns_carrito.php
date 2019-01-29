<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsCarrito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carritos', function (Blueprint $table) {
            $table->integer('usuario_id');
            $table->integer('venta_id');
        });

        Schema::table('ventas', function (Blueprint $table) {
            $table->dropColumn('idcliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carritos', function (Blueprint $table) {
            //
        });
    }
}
