<?php

namespace Database\Factories;

use App\Models\Ayah;
use App\Models\Tadabbur;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TadabburFactory extends Factory
{
    protected $model = Tadabbur::class;

    public function definition(): array
    {
        return [
            'is_verified' => $this->faker->boolean(), //
            'content' => $this->faker->sentence(8),
            'verified_by' => User::factory(),
            'created_by' => User::factory(),
            //            'ayah_id' => Ayah::inRandomOrder()->first()->getKey(),
            'is_private' => $this->faker->boolean(),
            'should_show_name' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
