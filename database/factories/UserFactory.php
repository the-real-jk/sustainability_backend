<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;



$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->userName,
        'password' => password_hash($faker->password, PASSWORD_DEFAULT), // password
        'firstname' => $faker->firstName($gender = null),
        'lastname' => $faker->lastName,
        'email' => $faker->unique()->freeEmail,
        'member_since' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
