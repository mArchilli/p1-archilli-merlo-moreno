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
        User::create([
            'name' => 'Admin',
            'lastName' => 'admin',
            'email' => 'admin@correo.com',
            'password' => Hash::make('1234'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Matias',
            'lastName' => 'Archilli',
            'email' => 'matias@correo.com',
            'password' => Hash::make('1234'),
            'role' => 'gratis',
        ]);

        User::create([
            'name' => 'Natalia',
            'lastName' => 'Merlo',
            'email' => 'natalia@correo.com',
            'password' => Hash::make('1234'),
            'role' => 'pro',
        ]);

        User::create([
            'name' => 'Jesus',
            'lastName' => 'Moreno',
            'email' => 'jesus@correo.com',
            'password' => Hash::make('1234'),
            'role' => 'premium',
        ]);
    }
}
