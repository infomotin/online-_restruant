<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [
                [
                    'name' => 'Admin',
                    'username' => 'admin',
                    'mobile' => '1234567890',
                    'avatar' => 'uploads/noimage.png',
                    'role' => 'admin',
                    'email' => 'admin@' . env('APP_DOMAIN'),
                    'password' => Hash::make('password'),
                    'status' => 'active',

                ],
                [
                    'name' => 'User',
                    'username' => 'user',
                    'mobile' => '01936915657',
                    'avatar' => 'uploads/noimage.png',
                    'role' => 'user',
                    'email' => 'user@' . env('APP_DOMAIN'),
                    'password' => Hash::make('password'),
                    'status' => 'active',
                ]
            ]
        );
    }
}
