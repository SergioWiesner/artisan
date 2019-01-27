<?php

namespace App\Source\Usuarios;

use App\User;

class Model
{

    public static function listarUsuariospaginados()
    {
        return User::paginate(25);
    }

    public static function todasLasPropiedades()
    {
        return User::with('perfiles')->with('bodegas')->get();
    }

    public static function todasLasPropiedadesPaginados()
    {
        return User::with('perfiles')->with('bodegas')->paginate(25);
    }

    public static function observarDetalles($id)
    {
        return User::where('id', $id)->with('perfiles')->with('tipodocumento')->with('bodegas')->with('compras')->with('ventas')->get();
    }
}
