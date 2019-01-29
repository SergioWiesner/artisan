<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carrito extends Model
{
    use SoftDeletes;

    protected $table = "carritos";
    protected $fillable = ['id', 'idproducto', 'cantidad', 'lote', 'usuario_id', 'venta_id'];

    public function cliente()
    {
        return $this->belongsTo('App\User', 'usuario_id', 'id');
    }

    public function productos()
    {
        return $this->belongsTo('App\Productos', 'idproducto', 'id');
    }

    public function ventas()
    {
        return $this->belongsTo('App\Ventas', 'venta_id', 'id');
    }
}
