<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perfiles extends Model
{
    use SoftDeletes;

    protected $table = "perfiles";
    protected $fillable = ['id', 'nombre', 'nivelacceso'];

    public function permisos()
    {
        return $this->belongsToMany('App\Permisos', 'perfiles_permisos', 'permisos_id', 'id');
    }

    public function usuarios()
    {
        return $this->belongsToMany('App\User', 'perfiles_users', 'perfiles_id', 'users_id');
    }
}
