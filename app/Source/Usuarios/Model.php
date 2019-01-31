<?php

namespace App\Source\Usuarios;

use App\User;
use Carbon\Carbon;

class Model
{

    public static function listarUsuariospaginados()
    {
        return User::with('bodegas')->with(['ventas' => function ($query) {
            $query->whereRaw('date(created_at) = "' . Carbon::now()->toDateString() . '"');
        }])->paginate(10);
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
        return User::where('id', $id)->with('perfiles')->with('tipodocumento')->with('bodegas')->with('compras.productos')->with(['ventas.carrito.productos', 'ventas.metododepago', 'ventas.metododeenvio'])->get();
    }
}
