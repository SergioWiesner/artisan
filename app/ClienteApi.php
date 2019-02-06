<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteApi extends Model
{

    protected $table = "oauth_clients";
    protected $fillable = ['id', 'user_id', 'name', 'secret', 'redirect', 'personal_access_client', 'password_client', 'revoked', 'created_at', 'updated_at'];
}
