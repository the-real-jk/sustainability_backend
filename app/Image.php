<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $primaryKey = 'id_images';
    public $timestamps = false;

    protected $fillable = [
        'id_images',
        'image',
    ];

    // define relations 

    public function posts()
    {
        return $this->belongsToMany('App\Post', 'image_post', 'id_images', 'id_posts');
    }
}
