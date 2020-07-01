<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_post extends Model
{
    protected $table = 'image_post';
    protected $primaryKey = 'id_image_post';
    public $timestamps = false;

    protected $fillable = [
        'id_image_post',
        'posts_id',
        'images_id',
    ];
}
