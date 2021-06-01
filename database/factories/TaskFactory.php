<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'todoo'=>$faker->sentence(3),
        'do'=>$faker->sentence(3),
        'done'=>$faker->sentence(3)

    ];
});
