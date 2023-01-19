<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('employees')->insert([
        //     'hotel_name' => 'Hotel 1',
        //     'department_name' => 'IT Department',
        //     'department_id' => 1,
        //     'full_name' => 'John Doe 1',
        //     'age' => 35,
        //     'address' => 'Earth',
        //     'email' => 'johndoe1@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make(12345678),
        //     'contact_number' => '+63912423',
        //     'role' =>'Fullstack Developer',
        //     'salary' => 57000,
        //     'status' => 'active',
        //     'created_at' => now(),
        //     'updated_at'=>now()
        // ]);

        \App\Models\Employee::factory()->create([
            'hotel_name' => 'Hotel 1',
            'department_name' => 'IT Department',
            'department_id' => Department::first(),
            'full_name' => 'John Doe 1',
            'age' => 35,
            'address' => 'Earth',
            'email' => 'johndoe1@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make(12345678),
            'contact_number' => '+63912423',
            'role' =>'Fullstack Developer',
            'salary' => 57000,
            'status' => 'active',
            'created_at' => now(),
            'updated_at'=>now()
        ]);
    }
}
