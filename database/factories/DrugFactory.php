<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Drug>
 */
class DrugFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'drugName' =>fake()->safeColorName(),
            'quantity' =>fake()->numberBetween(10, 150),
            'rol' => fake()->numberBetween(5,10),
            'isActive' => 1,
        ];
    }
}
