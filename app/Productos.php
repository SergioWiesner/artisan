<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Productos extends Model
{
    use SoftDeletes;

    protected $table = "productos";
    protected $fillable = ['id', 'referencia', 'nombre', 'descripcion', 'stock', 'valor', '', 'idproductopadre', 'estado'];

    public function catgorias()
    {
        return $this->belongsTo('App\Post', 'idcategoria', 'id');
    }

    public function propiedades()
    {
        return $this->belongsToMany('App\Propiedades', 'productos_propiedades', 'productos_id', 'propiedades_id');
    }

}
