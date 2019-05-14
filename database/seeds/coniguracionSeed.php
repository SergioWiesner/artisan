<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class coniguracionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configuracionsystem')->insert([
            'nombresistema' => "Artisan",
            'logosistema' => "/img/logo.png",
            'direccionsistema' => "",
            'telefono' => "000000",
            'ciudad' => "1",
            'hostmail' => "",
            'usuariomail' => "",
            'mailpuerto' => "",
            'mailencryption' => "",
            'clavemail' => "",
            'desde' => "",
            'nombredesde' => "",
        ]);
    }
}
