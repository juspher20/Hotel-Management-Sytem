<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
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
            'type' => $this->faker->name,
            'price_per_room' => $this->faker->randomFloat(2, 40, 50000),
            'maximum_costumer_per_room' => $this->faker->randomDigit,
        ];
    }
}
