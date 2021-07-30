<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Product;
use \App\Models\Invoice; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Invoice::factory(4)->create();
        Product::factory(60)->create();
    }
}
