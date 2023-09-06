<?php

namespace Database\Factories;

use App\Models\Classes;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassReview>
 */
class ClassReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'classes_id' => Classes::query()->inRandomOrder()->first()->id,
            'text' => $this->faker->text(),
            'user_id' => User::query()->inRandomOrder()->first()->id,
            'star_count' => rand(1, 5),
            'is_active' => 1
        ];
    }
}
