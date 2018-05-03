<?php

use Faker\Generator as Faker;

$factory->define(App\LevelModule::class, function (Faker $faker) {
    return [
        'level_id' => $faker->numberBetween(1, 4),
        'module_id' => $faker->numberBetween(1, 4)
    ];
});
