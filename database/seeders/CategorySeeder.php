<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::firstOrCreate(['description' => 'Lights']);
        Category::firstOrCreate(['description' => 'Switches']);
        Category::firstOrCreate(['description' => 'Cable']);
        Category::firstOrCreate(['description' => 'Generator']);
    }
}
