<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(MaterialStatusSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(AvailabilitySeeder::class);
        $this->call(UserStatusSeeder::class);
        $this->call(UserRolesSeeder::class);
        $this->call(UserSeeder::class);
    }
}
