<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeConfigSystem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('configuracionsystem', function (Blueprint $table) {
            $table->string('nombresistema')->nullable($value = true)->change();
            $table->string('logosistema')->nullable($value = true)->change();
            $table->string('direccionsistema')->nullable($value = true)->change();
            $table->string('telefono')->nullable($value = true)->change();
            $table->integer('ciudad')->nullable($value = true)->nullable($value = true)->change();
            $table->string('hostmail')->nullable($value = true)->change();
            $table->string('usuariomail')->nullable($value = true)->change();
            $table->string('mailpuerto')->nullable($value = true)->change();
            $table->string('mailencryption')->nullable($value = true)->change();
            $table->string('clavemail')->nullable($value = true)->change();
            $table->string('desde')->nullable($value = true)->change();
            $table->string('nombredesde')->nullable($value = true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('configuracionsystem', function (Blueprint $table) {
            //
        });
    }
}
