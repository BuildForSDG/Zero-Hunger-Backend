<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Warehouse;
use Faker\Generator as Faker;
use App\Product;
use Illuminate\Support\Str;
$factory->define(Warehouse::class, function (Faker $faker) {
    return [
        //
        'address' => Str::random(20),
    	'storage_capacity' => $faker->numberBetween(1,100),
    	'logo' => $faker->sentence(1),
    // 	'product_id' => function (){
    // 		return factory(Product::class)->create()->id;
    // },
    ];
});
