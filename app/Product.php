<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Farmer;
use App\Consumer;
use App\Warehouse;
use App\Cart;
class Product extends Model
{
    //
    protected $fillable = [
    'name',
    'category',
    'tag',
    'publish',
    'description',
    'status',
    'measure',
    'price',
    'packaged',
    'qty_per_package',
    'warehouse_id',
    'farmer_id',
    ]

    public function carts(){
    	return $this -> belongsToMany(Cart::class);
    }
    public function farmer(){
    	return $this -> belongsTo(Farmer::class);
    }
     public function warehouse(){
    	return $this -> belongsTo(Warehouse::class);
    }
}
