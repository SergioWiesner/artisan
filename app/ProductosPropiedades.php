<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductosPropiedades extends Model
{
    use SoftDeletes;

    protected $table = "productos_propiedades";
    protected $fillable = ['productos_id', 'propiedades_id', 'valor', 'deleted_at'];


    public function productospropiedades()
    {
        return $this->belongsTo('App\Productos', 'productos_id', 'id');
    }

    public function propiedadesPadre()
    {
        return $this->belongsTo('App\Propiedades', 'propiedades_id', 'id');
    }
}
