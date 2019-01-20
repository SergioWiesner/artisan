<?php


namespace App\Source\Productos;

use App\Productos;

class Modelo
{


    public static function agregarCategoriaProducto($datos)
    {
        return DB::table('productos')->insert([
            'nombre' => $datos['nombre'],
            'descripcion' => $datos['descripcion'],
            'rutaimg' => $datos['rutaimg'],
            'catgoriapadre' => $datos['catgoriapadre'],
        ]);
    }

    public static function listarProductospaginados()
    {
        return Productos::with('propiedades')->paginate(15);
    }

}
