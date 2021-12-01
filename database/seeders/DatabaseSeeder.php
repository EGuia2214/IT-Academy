<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> call(TeamSeeder::class);
        $this -> call(ScoreSeeder::class);
        $this -> call(PlayerSeeder::class);
        $this -> call(RoleSeeder::class);
        //$this -> call(UserSeeder::class); incluyo en user Seeder en el Database seeder (recomendación Laravel 8)

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
        

        User::factory(10)->create()->each(function($user){
            $user->assignRole('usuario');
        });
    }
}
