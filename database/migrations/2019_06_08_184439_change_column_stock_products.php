<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnStockProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productos_propiedades', function (Blueprint $table) {
            $table->integer('stock')->nullable($value = true)->default(0)->after('valor')->change();
            $table->string('precio')->nullable($value = true)->default(0)->after('stock')->change();
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
