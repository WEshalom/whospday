<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'cell' => $faker->phoneNumber,
        'home' => $faker->phoneNumber,
        'email' => $faker->email,
        'full_address' =>$faker->address
    ];
});


