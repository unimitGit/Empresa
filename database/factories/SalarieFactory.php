<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Salarie;
use Faker\Generator as Faker;

$factory->define(Salarie::class, function (Faker $faker) {
    return [
        //'employee_id' => 1,  <-- la llena automaticamente, porque la esta recibiendo por paramentro
        'salary' => $faker->randomNumber(5),
        'from_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'to_date' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
