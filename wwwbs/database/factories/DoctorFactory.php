<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Doctor::class, function (Faker $faker) {
    static $password;

    return [
        'firstName' => $faker->firstname($gender = null),
        'lastName' => $faker->lastName,
        'department' => array_rand(array("Chiropractor", "Physician", "Psychiatrist", "Staff"), 1)
    ];
});
