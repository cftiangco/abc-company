<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'name' => 'John',
            'email' => 'admin@admin.com',
            'user_status_id' => 1,
            'user_role_id' => 1,
            'pword' => Hash::make('admin@admin.com'),
        ]);
    }
}
