<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaConfiguracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracionsystem', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombresistema')->default('Artisan');
            $table->string('logosistema')->default('/img/logo.png');
            $table->string('direccionsistema')->nullable($value = true);
            $table->string('telefono')->nullable($value = true);
            $table->integer('ciudad')->nullable($value = true);
            $table->string('hostmail')->default('smtp.hostinger.co');
            $table->string('usuariomail')->default('artisan@codwelt.com');
            $table->string('mailpuerto')->default('587');
            $table->string('mailencryption')->nullable($value = true);
            $table->string('clavemail')->default('y4MUZBeWe5EAOudxQt');
            $table->string('desde')->default('artisan@codwelt.com');
            $table->string('nombredesde')->default('Artisan');
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
        Schema::dropIfExists('configuracionsystem');
    }
}
