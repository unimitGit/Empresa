<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DeptManager;
use Faker\Generator as Faker;

$factory->define(DeptManager::class, function (Faker $faker) {
    return [
        // employee_id, department_id llegan por parametro        
        'from_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'to_date' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
