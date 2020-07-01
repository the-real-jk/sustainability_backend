<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id_posts';
    public $timestamps = false;

    protected $fillable = [
        'id_posts',
        'text',
        'users_id',
    ];

    // define relations 

    public function users()
    {
        return $this->belongsTo('App\User', 'id_users', 'id_posts');
    }

    public function images()
    {
        return $this->belongsToMany('App\Image', 'image_post', 'id_posts', 'id_images');
    }
}
