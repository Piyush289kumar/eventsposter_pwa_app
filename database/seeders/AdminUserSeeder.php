<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'], // Prevent duplicate on re-seed
            [
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                 'password' => Hash::make('admin@123'),                
            ]
        );
    }
}
