<?php

namespace Database\Factories;

use App\Models\User;
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
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'eventName' => $this->faker->unique()->sentence(),
            'category' => $this->faker->text(),
            'startDate' => $this->faker->date(),
            'endDate' => $this->faker->date(),
            'startTime' => $this->faker->time(),
            'endTime' => $this->faker->time(),
            'description' => $this->faker->text(),
            'image' => $this->faker->sentence(),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high'])
        ];
    }
}
