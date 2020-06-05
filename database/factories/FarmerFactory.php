<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Farmer;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Farmer::class, function (Faker $faker) {
    return [
        //
        	'name' => $faker->name,
        	'address'=> $faker->sentence(1),
    	
    	'biodata' => $faker->paragraph(2),
    	'crop' => Str::random(20),
    	'planting_since' => $faker->date,
    
    ];
});
