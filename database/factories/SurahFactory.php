<?php

namespace Database\Factories;

use App\Models\surah;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class surahFactory extends Factory
{
    protected $model = surah::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(), //
            'number_of_verses' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
