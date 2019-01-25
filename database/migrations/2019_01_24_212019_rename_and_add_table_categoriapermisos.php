<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameAndAddTableCategoriapermisos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categoriapermisos', function (Blueprint $table) {
            $table->string('nombre');
            $table->boolean('estado');
            $table->softDeletes();
        });
        Schema::rename('categoriapermisos', 'categoria_permisos');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categoriapermisos', function (Blueprint $table) {
            //
        });
    }
}
