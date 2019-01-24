<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoriasPermisos extends Model
{
    use SoftDeletes;

    protected $table = "categoria_permisos";
    protected $fillable = ['id', 'nombre', 'estado'];

    public function permisos()
    {
        return $this->hasMany('App\Permisos', 'categoria', 'id');
    }

}
