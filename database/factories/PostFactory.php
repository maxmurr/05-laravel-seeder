<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 20),
            'title' => fake()->realTextBetween(10, 50),
            'description' => fake()->realTextBetween(100, 250),
            'view_count' => fake()->numberBetween(0, 1000),
            'like_count' => fake()->numberBetween(0, 1000),
        ];
    }
}
