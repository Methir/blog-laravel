<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'image' => 'post/default.png',
        'title' => $faker->sentence(5, true),
        'content' => $faker->paragraph(10),
        'category' => 'test',
        'user_id' => '1',
        //'user_id' => function () {
        //    return factory(App\User::class)->create()->id;
        //}
    ];
});
