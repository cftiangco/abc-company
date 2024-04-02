<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::firstOrCreate(['description' => 'North']);
        Location::firstOrCreate(['description' => 'East']);
        Location::firstOrCreate(['description' => 'South']);
        Location::firstOrCreate(['description' => 'West']);
    }
}
