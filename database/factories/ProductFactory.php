<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use App\Warehouse;
use App\Farmer;
$factory->define(Product::class, function (Faker $faker) {
    return [
        //
     'name' => $faker->name,
    'category'=> $faker->sentence(1),
    
    'description'=> $faker->paragraph(2),
    'status' => $faker->randomElement([0,1]),
    // 'measure' => $faker->sentence(33),
    'price' => $faker->numberBetween(100,100000),
    // 'packaged',
    // 'qty_per_package',
    'warehouse_id' => function (){
    		return factory(Warehouse::class)->create()->id;
    },
  'farmer_id' => function (){
    		return factory(Farmer::class)->create()->id;
    }
    ];
});

