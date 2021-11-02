<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Birthday;
use Faker\Generator as Faker;

$factory->define(Birthday::class, function (Faker $faker) {


    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'birthday' => $faker->date,
        'cell' => $faker->phoneNumber,
        'home' => $faker->phoneNumber,
        'age' => $faker->numberBetween(1,100)
    ];
});
