<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaProducto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_productos')->insert([
            'nombre' => "default",
            'descripcion' => "categoria por default",
            'rutaimg' => "/img/logo.png",
        ]);
    }
}
