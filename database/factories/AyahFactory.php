<?php

namespace Database\Factories;

use App\Models\Ayah;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AyahFactory extends Factory
{
    protected $model = Ayah::class;

    public function definition(): array
    {
        return [
            'sequence' => $this->faker->numberBetween(1, 100), //
            'content' => $this->faker->sentence(5),
            'surah_id' => $this->faker->numberBetween(1, 10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
