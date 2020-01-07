<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Agency;
use Faker\Generator as Faker;

$factory->define(Agency::class, function (Faker $faker) {
    return [
        'name' => sprintf('%s Agency', $faker->company),
    ];
});
