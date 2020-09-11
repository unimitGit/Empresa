<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Title;
use Faker\Generator as Faker;

$factory->define(Title::class, function (Faker $faker) {
    return [
        //'employee_id' => 1,  <-- la llena automaticamente, porque la esta recibiendo por paramentro
        'title' => $faker->jobTitle,
        'from_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'to_date' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
