<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Stringable;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'name' => 'Vicy',
            'role' => 'admin',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('12345')
        ]);

        User::create([
            'name' => 'valen',
            'role' => 'user',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('valen123')
        ]);
    }
}
