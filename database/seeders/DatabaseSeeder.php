<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice; 
use App\Models\Product;
use App\Models\User;
use App\Models\Task;
use App\Models\Log;
use Illuminate\Support\Str;



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
        User::create([
            'name'=> "TWGroup",
            'email'=>"twgroup@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
        ]);
        Task::factory(15)->create();
        Log::factory(30)->create();


    }
}
