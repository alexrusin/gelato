<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Chapter::class, function (Faker $faker) {
    return [
       'title' => $faker->sentence,
       'excerpt'=> $faker->paragraph(20),
       'image_url' => null
    ];
});
