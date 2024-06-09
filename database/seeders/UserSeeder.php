<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'password' => \Hash::make('1234'),
            'rol' => 'admin',
        ]);
    }
}
