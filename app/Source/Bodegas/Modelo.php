<?php
namespace App\Source\Bodegas;

use Illuminate\Support\Facades\DB;

class Modelo
{


    public static function AgregarBodega($data)
    {
        return DB::table('bodegas')->insert([
            'referencia' => $data['referencia'],
            'nombre' => $data['nombre'],
            'descripcion' => $data['descripcion']
        ]);
    }

}
