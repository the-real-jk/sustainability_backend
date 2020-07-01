<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_user extends Model
{
    protected $table = 'role_user';
    protected $primaryKey = 'id_role_user';
    public $timestamps = false;

    protected $fillable = [
        'id_role_user',
        'roles_id',
        'users_id'
    ];
}
