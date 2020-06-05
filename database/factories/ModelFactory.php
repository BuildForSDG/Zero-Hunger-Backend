<?php

use App\Farmer;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Product;
use App\Warehouse;

// $factory->define(Farmer::class, function (Faker $faker) {
//     return [
//         //
//         	'name' => $faker -> name,
//         	'address'=> $faker -> sentence(20),
    	
//     	'biodata' => $faker -> sentence(40),
//     	'crop' => $faker  -> Str::random(20),
//     	'planting_since' => $faker -> date,
    
//     ];
// });
// $factory->define(Product::class, function (Faker $faker) {
//     return [
//         //
//      'name' => $faker -> name,
//     'category'=> $faker -> sentence(10),
    
//     'description'=> $faker -> paragraph(2),
//     'status' => $faker ->randomElement(0,1),
//     'measure' => $faker -> numberBetween(1,33),
//     'price' => $faker -> numberBetween(100,100000),
//     // 'packaged',
//     // 'qty_per_package',
//     'warehouse_id' =>  factory(App\Warehouse::class)->create()->id,
//     'farmer_id' => factory(App\Farmer::class)->create()->id,
//     ];
// });
// $factory->define(Warehouse::class, function (Faker $faker) {
//     return [
//         //
//         'address' => $faker -> address(20),
//     	'storage_capacity' => $faker -> numberBetween(1,100),
//     	'logo' => $faker -> sentence(10),
//     	'product_id'=> factory(App\Product::class)->create()->id,
//     ];
// });


