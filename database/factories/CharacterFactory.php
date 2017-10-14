<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Character::class, function (Faker $faker) {
    return [
       'name' => $faker->name,
       'about'=> $faker->paragraph(20),
       'tag_line' => null,
       'image_url' => null
    ];
});
