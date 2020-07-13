<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_users';
    public $timestamps = false;

    protected $fillable = [
        'id_users',
        'username',
        'password',
        'firstname',
        'lastname',
        'email',
        'member_since',
    ];

    // define relations 
    public function roles()
    {
        return $this->belongsToMany('App/Role', 'role_user', 'id_users', 'id_roles');
    }

    public function posts()
    {
        return $this->hasMany('App/Post', 'id_posts', 'id_users');
    }
}adfasdfas
