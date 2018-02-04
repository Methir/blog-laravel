<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'user_id' => '1',
        'post_id' => '1',
        'content' => $faker->sentence(10, true),
    ];
});
