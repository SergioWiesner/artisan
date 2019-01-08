<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDocumento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_documentos')->insert([
            'nombre' => "Cedula de ciudadania",
        ]);
        DB::table('tipo_documentos')->insert([
            'nombre' => "Tarjeta de identidad",
        ]);
        DB::table('tipo_documentos')->insert([
            'nombre' => "Cedula de extranjerias",
        ]);
        DB::table('tipo_documentos')->insert([
            'nombre' => "Nit",
        ]);
        DB::table('tipo_documentos')->insert([
            'nombre' => "Nip",
        ]);
    }
}
