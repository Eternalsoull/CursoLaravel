<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'task_name' => fake()->words(4, true),
            'task_description' => fake()->sentence(),
            'task_is_done' => fake()->boolean(),
            'user_id' => fake()->numberBetween(1, 10),
            'project_id' => fake()->numberBetween(1, 5),
        ];
    }
}
