<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'url' => 'posts/' . $this->faker->image('public/public/posts', 640, 480, null, false),
    ];
});
