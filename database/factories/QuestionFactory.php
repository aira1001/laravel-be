<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class QuestionFactory extends Factory
{
    protected $model = Question::class;

    public function definition(): array
    {
        return [
            'ask' => $this->faker->sentence(3).'?',
            'answer' => $this->faker->sentence(8),
            'ayah_id' => $this->faker->numberBetween(1, 10),
            'not_suitable' => $this->faker->numberBetween(1,100),
            'like' => $this->faker->numberBetween(1, 100),
            'created_by' => $this->faker->numberBetween(1,20),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
