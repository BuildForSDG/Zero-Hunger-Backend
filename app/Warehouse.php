<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Warehouse extends Model
{
    //
    protected $fillable = [
    	'address',
    	'storage_capacity',
    	'logo',
    	'product_id',
    ];
  public function products(){
    	return  $this -> hasMany(Product::class);

    }
}
