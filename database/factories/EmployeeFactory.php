<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'lastName' => $faker->lastName,
        'dni' => $faker->randomNumber(8,false),
        'cellPhone' => $faker->randomNumber(9,false),
        'email' => $faker->unique()->safeEmail,
        'photo' => 'CEO.png',
    ];
});
