<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chairman>
 */
class ChairmanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'hotel_name' => $this->faker->name,
            'full_name' => $this->faker->name,
            'age' => $this->faker->randomDigit(),
            'address' => $this->faker->address,
            'email' => $this->faker->email,
            'email_verified_at' => now(),
            'password' => $this->faker->password,
            'contact_number' => $this->faker->randomFloat(11),
            'status' => $this->faker->name,
        ];
    }
}
