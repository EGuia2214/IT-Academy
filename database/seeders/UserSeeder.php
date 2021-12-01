<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),//password
            'remember_token' => Str::random(10),
        ])->assignRole('admin');

        User::create([
            'name' => 'User User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),//password
            'remember_token' => Str::random(10),
        ])->assignRole('usuario');
        
        
    }
}
