<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MaterialStatus;

class MaterialStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaterialStatus::firstOrCreate(['description' => 'Available']);
        MaterialStatus::firstOrCreate(['description' => 'Not Available']);
    }
}
