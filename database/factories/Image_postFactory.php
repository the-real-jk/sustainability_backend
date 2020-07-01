<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image_post;
use Faker\Generator as Faker;

$factory->define(Image_post::class, function (Faker $faker) {
    return [
        'posts_id' => $faker->numberBetween(1, 31),
        'images_id' => $faker->numberBetween(1, 3),
    ];
});
