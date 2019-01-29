<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ventas extends Model
{
    use SoftDeletes;

    protected $table = "ventas";
    protected $fillable = ['id', 'subtotal', 'impuestos', 'total', 'idcliente', 'idvendedor', 'metodopago', 'metodoenvio', 'estado'];


    public function clientes()
    {
        return $this->belongsTo('App\User', 'idcliente', 'id');
    }

    public function vendedores()
    {
        return $this->belongsTo('App\User', 'idvendedor', 'id');
    }

    public function metododeenvio()
    {
        return $this->belongsTo('App\MetodoEnvio', 'metodoenvio', 'id');
    }

    public function metododepago()
    {
        return $this->belongsTo('App\MetodoPago', 'metodopago', 'id');
    }

    public function carrito()
    {
        return $this->hasMany('App\Carrito', 'venta_id', 'id');
    }
}
