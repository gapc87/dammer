<?php

use Faker\Generator as Faker;


$factory->define(App\Group::class, function (Faker $faker) {
    return [
        'letter_group' => $faker->randomElement(array('A', 'B')),
        'level_id' => $faker->numberBetween(1, 4)
    ];
});
