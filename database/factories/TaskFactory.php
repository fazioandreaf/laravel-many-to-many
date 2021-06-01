<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'todoo'=>$faker->sentences,
        'do'=>$faker->sentences,
        'done'=>$faker->sentences

    ];
});
