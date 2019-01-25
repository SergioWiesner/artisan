<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permisos extends Model
{
    use SoftDeletes;

    protected $table = "permisos";
    protected $fillable = ['nombre', 'url', 'nivelacceso', 'estado', 'categoria'];

    public function categoriapermisos()
    {
        return $this->belongsTo('App\CategoriasPermisos', 'categoria', 'id');
    }

    public function perfiles()
    {
        return $this->belongsToMany('App\Perfiles', 'perfiles_permisos', 'perfiles_id', 'permisos_id');
    }
}
