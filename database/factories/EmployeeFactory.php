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
            'lastname' => fake()->text(50),
            'firstname' => fake()->text(50),
            'middlename' => fake()->text(50),
            'username' => fake()->text(50),
            'picture' => fake()->text(50),

        ];
    }
}
