<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->randomFloat(2,100,1000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(10,80)
    ];
});
