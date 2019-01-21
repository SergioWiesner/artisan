<?php

namespace App\Source\Productos\Propiedades;

use App\Source\Productos\Propiedades\Modelo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class propiedades
{

    public function listarCategoriaPropiedades()
    {
        return Modelo::listarCategoriasPropiedades();
    }

    public function listarPropiedadesSinPaginar()
    {
        return Modelo::listarPropiedades();
    }

    public function listarPropiedades()
    {
        return Modelo::listarPropiedadesPaginadas();
    }

    public function listarCategoriaProductos()
    {
        return Modelo::listarCatgoriasProductos();
    }

    public function eliminarPropiedad($id)
    {
        if (Modelo::eliminarPropiedad($id)) {
            Session::put('success', ["propiedad eliminada"]);
        } else {
            Session::put('error', ["Error al eliminar la propiedad"]);
        }
        return redirect()->back();
    }

    public function tooglearEstado($id, $estado)
    {
        if (Modelo::tooglePropiedad($id, $estado)) {
            Session::put('success', ["estado cambiado"]);
        } else {
            Session::put('error', ["Error al cambiar estado de la propiedad"]);
        }
        return redirect()->back();
    }

    public function crearpropiedad($request)
    {
        if (Modelo::crearPropiedad($request)) {
            Session::put('success', ["Propiedad creada " . $request['nombre']]);
        } else {
            Session::put('error', ["Error, no se puedo crear propiedad"]);
        }
        return redirect()->back();
    }


    public function actualizarPropiedad($request)
    {
        if (Modelo::actualizarPropiedad($request)) {
            Session::put('success', ["Propiedad creada actualizada"]);
        } else {
            Session::put('error', ["Error, no se puedo actualizar propiedad"]);
        }
        return redirect()->back();
    }
}
