<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'text' => $faker->realText($maxNbChars = 300, $indexSize = 2),
        'users_id' => $faker->numberBetween(1, 31),
    ];
});
