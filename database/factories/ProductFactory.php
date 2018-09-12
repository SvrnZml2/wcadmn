<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'description' => $faker->paragraph,
        'titre' =>$faker->title,
        'image_pres' =>$faker->imageUrl($width = 640, $height = 480),
        'image_1' =>$faker->imageUrl($width = 640, $height = 480),
        'image_2' =>$faker->imageUrl($width = 640, $height = 480),
        'user_id' =>$faker->numberBetween(1,2),
        'category'=>$faker->realText($maxNbChars = 10, $indexSize = 1),


    ];
});
