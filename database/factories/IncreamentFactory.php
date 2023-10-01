<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Increament>
 */
class IncreamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'employee_id' => $this->faker->numberBetween($min = 223, $max = 422),
            'department_id' => $this->faker->numberBetween($min = 1, $max = 6),
            'percent' => $this->faker->numberBetween($min = 5, $max = 20),
            'inc_date' => $this->faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now', $timezone = null),
        ];
    }




}
