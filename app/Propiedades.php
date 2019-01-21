<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Propiedades extends Model
{
    use SoftDeletes;

    protected $table = "propiedades";
    protected $fillable = ['id', 'nombre', 'categoriapadre', 'categoriapropiedad', 'estado'];

    public function categoriaPropiedad()
    {
        return $this->belongsTo('App\CategoriaPropiedades', 'categoriapropiedad', 'id');
    }

    public function categoriaHijos()
    {
        return $this->belongsTo('App\Propiedades', 'categoriapadre', 'id');

    }

    public function categoriaPadre()
    {
        return $this->hasMany('App\Propiedades', 'id', 'categoriapadre');
    }

    public function productos()
    {
        return $this->belongsToMany('App\Productos', 'productos_propiedades', 'productos_id', 'propiedades_id');
    }

    public function valorPropiedad()
    {
        return $this->hasMany('App\ProductosPropiedades', 'propiedades_id', 'id');
    }
}
