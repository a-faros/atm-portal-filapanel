<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asset>
 */
class AssetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'asset_number' => fake()->randomNumber(),
            'short_description' => fake()->text(50),
            'description' => fake()->text(50),
            'maintained_by' => fake()->text(50),

        ];
    }
}
