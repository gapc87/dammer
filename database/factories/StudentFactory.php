<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'group_id' => 1
    ];
});
