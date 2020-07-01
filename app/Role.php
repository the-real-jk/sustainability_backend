<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id_roles';
    public $timestamps = false;


    protected $fillable = [
        'id_roles',
        'rolename',
    ];

    // define relations 

    public function users()
    {
        return $this->belongsToMany('App\User', 'role_user', 'id_roles', 'id_users');
    }
}
