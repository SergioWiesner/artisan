<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldStockValor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productos_propiedades', function (Blueprint $table) {
            $table->integer('stock')->nullable($value = true)->after('valor');
            $table->string('precio')->nullable($value = true)->after('stock');
            $table->increments('id')->after('precio');
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
        Schema::table('productos_propiedades', function (Blueprint $table) {
            //
        });
    }
}
