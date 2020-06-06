<?php

use Illuminate\Database\Seeder;
use App\Warehouse;
use App\Farmer;
use App\Product;
use App\User;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
$user = factory(User::class)->make();
   DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Warehouse::truncate();
        Farmer::truncate();
        Product::truncate();
     

        Warehouse::flushEventListeners();
        Farmer::flushEventListeners();
        Product::flushEventListeners();
        

factory(Product::class,100)->create();
factory(Farmer::class,100)->create();
factory(Warehouse::class,100)->create();
         $this->call(ProductSeeder::class);
    }
}
