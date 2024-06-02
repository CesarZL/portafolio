<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'César Zavala López',
            'email' => 'cesarzavalamx15@gmail.com',
            'rol' => '1',
            'password' => Hash::make('password'),
        ]);

        Category::create(['name' => 'Desarrollo Web', 'name_en' => 'Web Development']);
        Category::create(['name' => 'UX/UI', 'name_en' => 'UX/UI']);
        Category::create(['name' => 'IA', 'name_en' => 'AI']);
        // Category::create(['name' => 'DevOps', 'name_en' => 'DevOps']);
        Category::create(['name' => 'IoT', 'name_en' => 'IoT']);
        Category::create(['name' => 'Diseño', 'name_en' => 'Design']);
        Category::create(['name' => 'Marketing', 'name_en' => 'Marketing']);
    }
}
