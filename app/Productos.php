<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Productos extends Model
{
    use SoftDeletes;

    protected $table = "productos";
    protected $fillable = ['id', 'referencia', 'nombre', 'descripcion', 'rutaimagen', 'stock', 'valor', 'idcategoria', 'idproductopadre', 'bodega', 'estado'];

    public function catgorias()
    {
        return $this->belongsTo('App\CategoriaProductos', 'idcategoria', 'id');
    }

    public function propiedades()
    {
        return $this->belongsToMany('App\Propiedades', 'productos_propiedades', 'productos_id', 'propiedades_id');
    }

    public function propiedadesvalor()
    {
        return $this->hasMany('App\ProductosPropiedades', 'productos_id', 'id');
    }

    public function bodegas()
    {
        return $this->belongsTo('App\bodegas', 'bodega', 'id');
    }

    public function carrito()
    {
        return $this->hasMany('App\Carrito', 'idproducto', 'id');
    }
}
