<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        /*$img = file_get_contents($this->faker->imageURL('640', '480')),
        file_put_contents(storage_path() . '\app\public\posts', $img), */

        // 'url' => $this->faker->image(storage_path() . '\app\public\posts', 640, 480, null, false),
        'name' => 'name_test_img',
        'extension' => 'jpg',
        'url' => 'posts/' . $this->faker->randomElement(['(1).jpg', '(2).jpg', '(3).jpg', '(4).jpg', '(5).jpg', '(6).jpg', '(7).jpg', '(8).jpg', '(9).jpg', '(10).jpg', '(11).jpg', '(12).jpg', '(13).jpg', '(14).jpg', '(15).jpg', '(16).jpg', '(17).jpg', '(18).jpg', '(19).jpg', '(20).jpg', '(21).jpg', '(22).jpg', '(23).jpg', '(24).jpg', '(25).jpg', '(26).jpg', '(27).jpg', '(28).jpg', '(29).jpg', '(30).jpg']),
        'size' => '12'
    ];
});
