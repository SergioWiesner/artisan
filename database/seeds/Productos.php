<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Productos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'referencia' => "prueloganar",
            'nombre' => "Producto de prueba",
            'descripcion' => "Producto de prueba",
            'stock' => 20,
            'valor' => 1000000,
            'idcategoria' => 1
        ]);
    }
}
