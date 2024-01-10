<?php

namespace Database\Factories;

use Psy\Util\Str;
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
            'drugName' =>fake()->userName(),
            'quantity' =>fake()->numberBetween(70, 150),
            'rol' => fake()->numberBetween(5,30),
            'unitPrice' => fake()->numberBetween(1,20),
            'isActive' => 1,
        ];
    }
}
