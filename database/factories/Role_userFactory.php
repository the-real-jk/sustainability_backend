<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role_user;
use Faker\Generator as Faker;

$factory->define(Role_user::class, function (Faker $faker) {
    return [
        'roles_id' => $faker->numberBetween(1, 5),
        'users_id' => $faker->numberBetween(1, 30),
    ];
});
