<?php

use Illuminate\Database\Seeder;

class bodegaseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bodegas')->insert([
            'referencia' => "bodega1",
            'nombre' => "Bodega default",
            'descripcion' => "bodega por defecto del sistema",
        ]);
    }
}
