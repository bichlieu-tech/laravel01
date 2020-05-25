<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $Id=App\Models\Brand::pluck('id')->toArray();
    return [
        'name' => $faker->title,
        'desc' => $faker->paragraph,
        'price'=> $faker->randomNumber,
        'brand_id'=>$faker->randomElement($Id),
       
    ];
});
