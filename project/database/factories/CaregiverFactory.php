<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Caregiver;
use Faker\Generator as Faker;

$factory->define(Caregiver::class, function (Faker $faker) {
    return [
        'agency_id' => 0,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'position' => $faker->randomElement(config('caregivers.positions')),
        'license_number' => function (array $caregiver) use ($faker) {
            return ($caregiver['position'] == 'Skilled Nurse') ? $faker->randomNumber($nbDigits = 6) : null;
        },
        'license_expiration' => function (array $caregiver) use ($faker) {
            return ($caregiver['position'] == 'Skilled Nurse') ? $faker->dateTimeBetween($startDate = '+1 month', $endDate = '+2 years')->format('Y-m-d') : null;
        },
    ];
});
