<?php
/**
 * Created by PhpStorm.
 * User: heros
 * Date: 3/02/2019
 * Time: 2:08 PM
 */

namespace App\Source\Bodegas;


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
