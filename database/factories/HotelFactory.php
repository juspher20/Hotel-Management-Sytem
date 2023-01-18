<?php

namespace Database\Factories;

use App\Models\Chairman;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
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
            'address' =>$this->faker->address,
            'sales_per_year' => $this->faker->randomFloat(3,1000,100000000),
            'total_rooms' => $this->faker->randomDigit,
            'chairman_id'=> Chairman::first(),
        ];
    }
}
