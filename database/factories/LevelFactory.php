<?php

use Faker\Generator as Faker;

$factory->define(App\Level::class, function (Faker $faker) {
    return [
        'course_id' => $faker->numberBetween(1, 4),
        'level' => $faker->numberBetween(1, 4)
    ];
});
