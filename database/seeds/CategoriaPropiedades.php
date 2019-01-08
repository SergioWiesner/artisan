<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaPropiedades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_propiedades')->insert([
            'nombre' => "Longitud",
        ]);
        DB::table('categoria_propiedades')->insert([
            'nombre' => "Masa   ",
        ]);
        DB::table('categoria_propiedades')->insert([
            'nombre' => "Capacidad",
        ]);
        DB::table('categoria_propiedades')->insert([
            'nombre' => "Superficie",
        ]);
        DB::table('categoria_propiedades')->insert([
            'nombre' => "Volumen",
        ]);
        DB::table('categoria_propiedades')->insert([
            'nombre' => "Colores",
        ]);
        DB::table('categoria_propiedades')->insert([
            'nombre' => "Tallas",
        ]);
        DB::table('categoria_propiedades')->insert([
            'nombre' => "Fabricación",
        ]);

    }
}
