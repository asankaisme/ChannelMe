<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Drug;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::factory()->create([
        //     'name' => 'Asanka',
        //     'email' => 'asankaisme@gmail.com',
        //     'password' => Hash::make('asanka123'),
        // ]);

        // User::factory(5)->create();

        //Patient::factory(10)->create();

        //Drug::factory(20)->create();
        
    }
}