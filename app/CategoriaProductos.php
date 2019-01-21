<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoriaProductos extends Model
{
    use SoftDeletes;

    protected $table = "categoria_productos";
    protected $fillable = ['id', 'nombre', 'descripcion', 'rutaimg', 'catgoriapadre'];


    public function productos()
    {
        return $this->hasMany('App\Comment', 'idcategoria', 'id');
    }

}
