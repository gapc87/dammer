<?php

use Faker\Generator as Faker;

$factory->define(App\RoleUser::class, function (Faker $faker) {
    return [
        'role_id' => $faker->randomElements([1, 4]),
        'user_id' => $faker->numberBetween(1, 4)
    ];
});
