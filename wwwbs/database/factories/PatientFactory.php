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

$factory->define(App\Patient::class, function (Faker $faker) {
    static $password;

    return [
        'nsid' => $faker->regexify('([a-z]){3}([0-9]){3}'),
        'firstName' => $faker->firstname($gender = null),
        'lastName' => $faker->lastName,
        'healthNumber' => $faker->randomNumber($nbDigits = 9, $strict = false),
        'birthDate' => $faker->dateTimeThisCentury($max = 'now', $timezone = date_default_timezone_get()),
        'address' => $faker->address,

    ];
});
