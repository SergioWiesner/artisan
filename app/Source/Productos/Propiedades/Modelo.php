<?php

namespace App\Source\Productos\Propiedades;

use Illuminate\Support\Facades\DB;
use App\ProductosPropiedades;
use App\CategoriaPropiedades;
use App\Source\Tools\Basics;
use App\CategoriaProductos;
use App\Propiedades;

class Modelo
{
    public static function listarCatgoriasProductos()
    {
        return Basics::collectionToArray(CategoriaProductos::all());
    }

    public static function listarCategoriasPropiedades()
    {
        return Basics::collectionToArray(CategoriaPropiedades::all());
    }

    public static function listarPropiedades()
    {
        return Basics::collectionToArray(Propiedades::with('categoriaPropiedad')->get());
    }

    public static function listarPropiedadesPaginadas()
    {
        return Propiedades::with('categoriaPropiedad')->with('categoriaPadre')->paginate(15);
    }

    public static function eliminarPropiedad($id)
    {
        return Propiedades::where('id', $id)->delete();
    }

    public static function tooglePropiedad($id, $estado)
    {
        return Propiedades::where('id', $id)->update(['estado' => $estado]);
    }

    public static function crearPropiedad($datos)
    {
        return DB::table('propiedades')->insert([
            'nombre' => $datos['nombre'],
            'categoriapadre' => $datos['propiedadpadre'],
            'categoriapropiedad' => $datos['categoria'],
        ]);
    }

    public static function actualizarPropiedad($datos)
    {
        return DB::table('propiedades')
            ->where('id', $datos['id'])
            ->update([
                'nombre' => $datos['nombre'],
                'categoriapadre' => $datos['propiedadpadre'],
                'categoriapropiedad' => $datos['categoria']
            ]);
    }

    public static function buscarValorPropiedadProducto($id)
    {
        return ProductosPropiedades::where('id', $id)->get();
    }
}
