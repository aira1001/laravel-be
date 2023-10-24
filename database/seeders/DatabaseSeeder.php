<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Question;
use App\Models\surah;
use App\Models\Tadabbur;
use App\Models\User;
use App\Models\Ayah;
use Illuminate\Database\Seeder;

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
        User::factory(10)->create();
        Surah::factory()->create([
            'name' => 'Al-Fatihah',
            'number_of_verses' => 7,
        ]);
        Surah::factory()->create([
            'name' => 'Al-Baqarah',
            'number_of_verses' => 286,
        ]);
        Surah::factory()->create([
            'name' => 'Ali-Imran',
            'number_of_verses' => 200,
        ]);
        Surah::factory()->create([
            'name' => 'An-Nisa',
            'number_of_verses' => 176,
        ]);
        Surah::factory()->create([
            'name' => 'Al-Maidah',
            'number_of_verses' => 120,
        ]);
        Surah::factory()->create([
            'name' => "Al-An'am",
            'number_of_verses' => 165,
        ]);
        Surah::factory()->create([
            'name' => "Al-An'am",
            'number_of_verses' => 165,
        ]);
        Surah::factory()->create([
            'name' => 'Al-Anfal',
            'number_of_verses' => 75,
        ]);
        Surah::factory()->create([
            'name' => 'At-Taubah',
            'number_of_verses' => 129,
        ]);
        Surah::factory()->create([
            'name' => 'Yunus',
            'number_of_verses' => 109,
        ]);
        Ayah::factory(10)->create();
        Tadabbur::factory(10)->has(Ayah::factory())->create();
        Question::factory(10)->create();
    }
}
