<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodosEnvio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metodo_envios')->insert([
            'nombre' => "En local",
        ]);
        DB::table('metodo_envios')->insert([
            'nombre' => "Transportadora",
        ]);
    }
}
