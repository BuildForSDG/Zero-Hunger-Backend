<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cart;
class Consumer extends Model
{
    //
    protected $fillable = [
    	'name',
    	'address',
    	'profile_picture',
    	'email',
    	'phone',
    	'purchase_id',

    ]

    public function cart(){
    	return $this -> belongsTo(Cart::class);
    }
}
