<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cart;
class Order extends Model
{
    //
    protected $fillable = [
    	'address',
    	'cancelled',
    	'cart_id',

    ]
      public function cart(){
    	return $this -> belongsTo(Cart::class);
    }

}
