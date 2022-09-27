<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\File;
use Faker\Generator as Faker;

$factory->define(File::class, function (Faker $faker) {
    return [
        'name' => 'name_test_donwload',
        'extension' => 'zip',
        'url' => 'posts/files/' . $this->faker->randomElement(['donwloadall_1.zip', 'donwloadall_2.zip', 'donwloadall_3.rar']),
        'size' => '2048'
    ];
});
