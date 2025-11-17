<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->randomNumber(5, false),
        'stock' => $faker->randomNumber(3, false),
        'detail' => $faker->paragraph(5,false)
    ];
});
