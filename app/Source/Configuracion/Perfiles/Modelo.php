<?php

namespace App\Source\Configuracion\Perfiles;

use App\Perfiles;
use Illuminate\Support\Facades\DB;

class Modelo
{

    public static function crearPerfiles($datos)
    {
        return DB::table('perfiles')->insert([
            'nombre' => $datos['nombre'],
            'nivelacceso' => $datos['nivelacceso']
        ]);
    }

    public static function listarPerfiles()
    {
        return Perfiles::all();
    }
}
