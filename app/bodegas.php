<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class bodegas extends Model
{
    use SoftDeletes;

    protected $table = "bodegas";
    protected $fillable = ['id', 'referencia', 'nombre', 'descripcion'];


    public function productos()
    {
        return $this->hasMany('App\Productos', 'bodega', 'id');
    }


    public function usuarios()
    {
        return $this->belongsToMany('App\User', 'bodegas_user', 'bodegas_id', 'user_id');
    }
}
