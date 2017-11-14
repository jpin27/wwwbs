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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        // All system users have a first name and last name, and an email.
        'firstName' => $faker->firstname($gender = null),
        'lastName' => $faker->lastName,
        'email' => $faker->email,
        'password' => $faker->password,
    ];
});

$factory->state(App\User::class, 'doctor', function ($faker) {
    return [
        // Practitioners have an additional 7 subroles.
        'subRole' => $faker->randomElement(
            $subRoleArray = array('Doctor', 'Nurse Practitioner', 'Dietitian', 'Social Worker', 'Physiotherapist', 'Massage Therapist', 'Chiropractor')
        )
    ];
});

$factory->state(App\User::class, 'patient', function ($faker) {
    return [
        // Patients have additional information. 

        // TODO: Edit out the NSID for faculty and staff patients - do they have an NSID?
        'nsid' => $faker->regexify('([a-z]){3}([0-9]){3}'),
        
        // In our dummy data, nobody lives past 80!
        'birthDate' => $faker->dateTimeBetween($startDate = '-80 years', $endDate = 'now', $timezone = date_default_timezone_get()),
        'address' => $faker->address,
        'healthNumber' => $faker->randomNumber($nbDigits = 9, $strict = false),

        // Differentiate a student patient from a faculty and staff patient
        'subRole' => $faker->randomElement(
            $subRoleArray = array('Student Patient', 'Faculty Patient', 'Staff Patient')
        )
    ];
});