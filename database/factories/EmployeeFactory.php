<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstname,
        'last_name' => $faker->lastName,
        'gender' => 'M',
        'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'hire_date' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
