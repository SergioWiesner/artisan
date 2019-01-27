<?php

use Illuminate\Database\Seeder;

class permisoseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permisos')->insert([
            'nombre' => 'configuracion',
            'url' => '/configuracion',
            'nivelacceso' => 10,
            'estado' => 1,
            'categoria' => 1
        ]);
    }
}
