<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice; 
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Invoice::factory(8)->create();
        Product::factory(40)->create();
    }
}
