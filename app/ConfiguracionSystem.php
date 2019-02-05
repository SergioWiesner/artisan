<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConfiguracionSystem extends Model
{
    use SoftDeletes;

    protected $table = "configuracionsystem";
    protected $fillable = ['nombresistema', 'logosistema', 'hostmail', 'usuariomail', 'mailpuerto', 'mailencryption', 'clavemail', 'desde', 'nombredesde'];
}
