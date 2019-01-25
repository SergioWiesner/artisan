<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MetodoEnvio extends Model
{
    use SoftDeletes;

    protected $table = "metodo_envios";
    protected $fillable = ['id', 'nombre', 'estado'];


    public function ventas()
    {
        return $this->hasMany('App\Ventas', 'metodoenvio', 'id');
    }

}
