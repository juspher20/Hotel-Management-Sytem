<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
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
    public function definition()
    {
        return [
            //
            'hotel_name' => $this->faker->name,
            'department_name' =>$this->faker->name,
            'full_name' => $this->faker->name,
            'age' => $this->faker->randomDigit(),
            'address' => $this->faker->address,
            'email' => $this->faker->email,
            'email_verified_at' => now(),
            'password' => $this->faker->password,
            'contact_number' => $this->faker->randomFloat(11),
            'role' => $this->faker->name,
            'salary' => $this->faker->randomFloat(2, 40, 500),
            'status' => $this->faker->name,
            'department_id' => Department::first()
        ];
    }
}
