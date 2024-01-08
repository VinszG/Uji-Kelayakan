<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Staff Tata Usaha", 
            "email" => "staff@gmail.com",
            "password" => Hash::make('staffTU'),
            "role" => "staff",
        ]);
        // User::create ([
        //     "name" => "Guru",
        //     "email" => "guru@gmail.com", 
        //     "password" => Hash::make('guru'),
        //     "role" => "guru", 
        // ]);
    }
}
