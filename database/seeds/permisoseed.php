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
            'nombre' => 'Configuracion',
            'url' => '/configuracion',
            'nivelacceso' => 10,
            'estado' => 1,
            'categoria' => 1
        ]);

        DB::table('permisos')->insert([
            'nombre' => 'Productos',
            'url' => '/productos',
            'nivelacceso' => 3,
            'estado' => 1,
            'categoria' => 1
        ]);

        DB::table('permisos')->insert([
            'nombre' => 'Usuarios',
            'url' => '/usuarios',
            'nivelacceso' => 10,
            'estado' => 1,
            'categoria' => 1
        ]);
    }
}
