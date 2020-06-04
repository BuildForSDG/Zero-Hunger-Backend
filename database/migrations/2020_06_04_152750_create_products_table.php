<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table -> string('name');
            $table -> string('category');
            $table -> string('tag');
            $table -> boolean('publish')->default(1);
            $table -> string('description');
            $table -> boolean('status');
            $table->timestamps();
            $table -> string(' measure');
            $table -> integer('price');
            $table -> boolean('packaged');
            $table -> integer('qty_per_package');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
