<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Model;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Model::class, function (Faker $faker) {
    $name = $this->faker->unique()->sentence();
    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'extract' => $this->faker->text(250),
        'body' => $this->faker->text(250),
        'status' => $this->faker->randomElement([1, 2]),
        'category_id' => Category::all()->random()->id,
        'user_id' => User::all()->random()->idate
    ];
});
