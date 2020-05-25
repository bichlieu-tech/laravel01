<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Order;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Order::class, function (Faker $faker) {
    $Id=App\Models\User::pluck('id')->toArray();
    return [
       'users_id'=>$faker->randomElement($Id),
    ];
});
