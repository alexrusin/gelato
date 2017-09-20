<?php

use App\Models\Store\AttributeValue;
use Faker\Generator as Faker;

$factory->define(AttributeValue::class, function (Faker $faker) {
    return [
       	'attribute_id' => 1,
       	'name' => 'S'
    ];
});
