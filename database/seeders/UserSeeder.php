<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admins
        User::create([
            'name' => 'Admin 1',
            'email' => 'admin1@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Admin 2',
            'email' => 'admin2@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        // Clientes
        User::create([
            'name' => 'Cliente 1',
            'email' => 'cliente1@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'client',
        ]);

        User::create([
            'name' => 'Cliente 2',
            'email' => 'cliente2@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'client',
        ]);

        User::create([
            'name' => 'Cliente 3',
            'email' => 'cliente3@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'client',
        ]);

        User::create([
            'name' => 'Cliente 4',
            'email' => 'cliente4@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'client',
        ]);
    }
}