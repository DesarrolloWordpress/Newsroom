<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->jobTitle,
        'content' => $faker->paragraph,
        'image_url' => $faker->imageUrl(450, 270),
        'userId' => $faker->randomDigitNotNull
    ];
});
