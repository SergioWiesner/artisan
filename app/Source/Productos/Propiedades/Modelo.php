<?php

namespace App\Source\Productos\Propiedades;

use App\Propiedades;
use App\CategoriaPropiedades;
use App\Source\Tools\Basics;

class Modelo
{

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

}
