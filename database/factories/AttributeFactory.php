<?php

use App\Models\Store\Attribute;
use Faker\Generator as Faker;

$factory->define(Attribute::class, function (Faker $faker) {
    return [
        'product_id' => 1,
        'name' => 'Size'
    ];
});
