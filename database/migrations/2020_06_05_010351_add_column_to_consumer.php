<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToConsumer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consumers', function (Blueprint $table) {
            //
            $table -> string('email')->unique();
            $table -> string('phone');
            $table -> bigInteger('purchase_id',$autoincrement = false, $unsigned = true);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consumers', function (Blueprint $table) {
            //
        });
    }
}
