<?php

use Faker\Generator as Faker;

$factory->define(App\Teacher::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'group_id' => 1
    ];
});
