<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice; 
use App\Models\Product;
use App\Models\User;
use App\Models\Task;
use App\Models\Log;


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
        // seeder for fifth challenge
        User::factory(4)->create();
        Task::factory(10)->create();
        Log::factory(25)->create();


    }
}
