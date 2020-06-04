<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->id();
            $table -> string('name');
            $table -> string('address');
            $table -> string('biodata');
            $table -> string('crop');
            $table -> datetime('planting_since');
            $table -> string('profile');
            $table -> string('number');
            $table -> integer('land_size');
            $table -> string('education');
            $table -> string('contact_person');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farmers');
    }
}
