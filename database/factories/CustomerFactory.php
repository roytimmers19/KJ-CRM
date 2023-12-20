<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_name' => fake()->company,
            'address' => fake()->address(),
            'postal_code' => fake()->postcode,
            'place' => fake()->city,
            'telephone' => fake()->phoneNumber,
            'emailaddress' => fake()->email,
        ];
    }
}
