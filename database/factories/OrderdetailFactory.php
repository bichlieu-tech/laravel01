<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\OrderDetail;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(OrderDetail::class, function (Faker $faker) {
$orderId=App\Models\Order::pluck('id')->toArray();
$productId=App\Models\Product::pluck('id')->toArray();


    return [
        'name' => $faker->title,
        'price'=> $faker->randomNumber,
         'quautity'=>$faker->unixTime,
         'total'=>$faker->latitude,
         'orders_id'=>$faker->randomElement($orderId),
         'product_id'=>$faker->randomElement($productId),
    ];
});
