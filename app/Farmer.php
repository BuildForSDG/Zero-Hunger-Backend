<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Farmer;
class Farmer extends Model
{
    //
    protected $fillable = [ 
    	'name',
    	'address',
    	'biodata',
    	'crop',
    	'planting_since',
    	'profile',
    	'number',
    	'land_size',
    	'education',
    	'contact_person',
    ];
    public function products(){
    	return  $this -> hasMany(Product::class);

    }
}
