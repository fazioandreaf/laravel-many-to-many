<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'todoo'=>$faker->word,
        'do'=>$faker->word,
        'done'=>$faker->word

    ];
});
