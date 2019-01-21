<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Productos extends Model
{
    use SoftDeletes;

    protected $table = "productos";
    protected $fillable = ['id', 'referencia', 'nombre', 'descripcion', 'rutaimagen', 'stock', 'valor', 'idcategoria', 'idproductopadre', 'estado', 'created_at', 'updated_at', 'deleted_at'];

    public function catgorias()
    {
        return $this->belongsTo('App\CategoriaProductos', 'idcategoria', 'id');
    }

    public function propiedades()
    {
        return $this->belongsToMany('App\Propiedades', 'productos_propiedades', 'productos_id', 'propiedades_id');
    }

}
