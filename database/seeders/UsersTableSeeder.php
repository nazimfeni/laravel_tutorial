<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
        {
            // Generate and insert 100 users
            for ($i = 0; $i < 100; $i++) {
                User::create([
                    'name' => 'User ' . ($i + 1),
                    'email' => 'user' . ($i + 1) . '@example.com',
                    'password' => bcrypt('password123'),
                ]);
            }
        }
    }