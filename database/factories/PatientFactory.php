<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fname' =>fake()->firstName(),
            'lname' =>fake()->lastName(),
            'birthday' =>fake()->date(),
            'gender' => fake()->numberBetween(1,2),
            'add1' => fake()->streetName(),
            'add2' => fake()->streetAddress(),
            'city' => fake()->city(),
            'mobile' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'contactPerson' =>fake()->name(),
            'contMobile' => fake()->phoneNumber(),
            'bloodGroup' => fake()->bloodGroup(),
            'isActive' => 1,
        ];
    }
}
