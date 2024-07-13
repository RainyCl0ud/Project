<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Database\Seeders\LoginSeeder;
use Database\Seeders\CommentSeeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        

        $this->call([

            UserSeeder::class,
            LoginSeeder::class,
            CommentSeeder::class,
           
         
        ]);
    }
}
