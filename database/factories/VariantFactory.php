<?php

use App\Models\Store\Variant;
use Faker\Provider\Base;
use Faker\Generator as Faker;

$factory->define(Variant::class, function (Faker $faker) {
    return [
       	'product_id' => 1,
       	'title' => $faker->sentence,
       	'price' => abs($faker->randomFloat(2, 5, 25)),
       	'sku' => $faker->ean8,
       	'quantity' => abs($faker->randomNumber(2)),
       	'attribute_1' => 'S',
    ];
});
