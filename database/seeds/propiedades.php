<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class propiedades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('propiedades')->insert([
            'nombre' => "propiedadprueba",
            'categoriapropiedad' => 1,
        ]);
    }
}
