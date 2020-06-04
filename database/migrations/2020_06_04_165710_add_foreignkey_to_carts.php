<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToCarts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          //product id
            //consumer id
        Schema::table('carts', function (Blueprint $table) {
            //
            // $table -> bigInteger('product_id', $autoincrement = false, $unsigned = true);
            $table -> bigInteger('consumer_id',$autoincrement = false, $unsigned = true);
            // $table -> foreign('product_id')->references('id')->on('products');
              $table -> foreign('consumer_id')->references('id')->on('consumers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carts', function (Blueprint $table) {
            //
        });
    }
}
