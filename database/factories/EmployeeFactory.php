<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'department_id' => $this->faker->numberBetween($min = 1, $max = 6),
            'name' => $this->faker->name,
            'designation' => $this->faker->jobTitle,
            'doj' => $this->faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now', $timezone = null),
            'salary' => $this->faker->numberBetween($min = 10000, $max = 150000),

        ];
    }
}
