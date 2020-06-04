<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\products;
use Faker\Generator as Faker;

$factory->define(products::class, function (Faker $faker) {
    return [
        'pro_name' => $faker->text,
        'pro_code' => $faker->text,
        'pro_img' => $faker->text,
        'pro_price' => $faker->text,
        'pro_dec' => $faker->text,
    ];
});
