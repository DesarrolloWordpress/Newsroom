<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Model;
use App\Post;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $name = $this->faker->unique()->sentence();
    $text = $this->faker->text(250);
    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'extract' => substr($text, 0, 100),
        'body' => $text,
        'status' => $this->faker->randomElement([1, 2]),
        'category_id' => Category::all()->random()->id,
        'user_id' => User::all()->random()->id
    ];
});
