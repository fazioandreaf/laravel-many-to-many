<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contract;
use Faker\Generator as Faker;

$factory->define(Contract::class, function (Faker $faker) {
    return [
        'type'=>$faker->word,
        'expiration_date'=>$faker->word,
        'ral'=>$faker->numberBetween(1000,9000000),
        'seniority'=>$faker->word,

    ];
});
