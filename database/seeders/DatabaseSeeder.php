<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat Admin
        User::create([
            'name' => 'Admin Troy',
            'email' => 'admin@undiknas.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        // Buat User Mahasiswa Biasa
        User::create([
            'name' => 'Teguh Perkasa',
            'email' => 'teguh@undiknas.com',
            'password' => Hash::make('12345678'),
            'role' => 'mahasiswa',
        ]);
    }
}