<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MetodoPago extends Model
{
    use SoftDeletes;

    protected $table = "metodo_pagos";
    protected $fillable = ['id', 'nombre', 'valor', 'estado'];


    public function venta()
    {
        return $this->hasMany('App\Ventas', 'metodopago', 'id');
    }
}
