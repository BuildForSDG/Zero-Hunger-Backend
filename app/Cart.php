<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\Consumer;
use App\Product;
class Cart extends Model
{
    //
    protected $fillable = [
    	'product_id',
    	'consumer_id',
    	'quantity',
    ]
    public function products(){
    	return  $this -> belongsToMany(Product::class);

    }
    public function consumer(){
    	return $this -> hasOne(Consumer::class);
    }
    public function order(){
    	return $this -> hasOne(Order::class);
    }
}
