<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPropertisTableProductosPropiedades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productos_propiedades', function (Blueprint $table) {
            $table->integer('rebaja')->after('precio')->nullable(true);
            $table->longText('descripcion')->after('valor')->nullable(true);
            $table->string('img')->nullable(true)->after('rebaja');
            $table->string('imghover')->nullable(true)->after('img');
            $table->boolean('sumable')->default(0)->after('imghover');
            $table->boolean('activacion')->default(1)->after('sumable');
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
