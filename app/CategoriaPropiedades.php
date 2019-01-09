<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoriaPropiedades extends Model
{
    use SoftDeletes;

    protected $table = "categoria_propiedades";
    protected $fillable = ['id', 'nombre', 'estado'];

    public function propiedades()
    {
        return $this->hasMany('App\Propiedades', 'categoriapropiedad', 'id');
    }
}
