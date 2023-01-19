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
        //     'hotel_name' => 'Hotel name 1',
        //     'department_name' => 'IT Department',
        //     'department_id' => Department::first(),
        //     'full_name' => 'Juspher Balangyao',
        //     'age' => 21,
        //     'address' => 'Earth',
        //     'email' => 'juspher.balangyao@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make(12345678),
        //     'contact_number' => '+639124223',
        //     'role' => 'Fullstack Developer',
        //     'salary' => 57000,
        //     'status' => 'active',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        \App\Models\Employee::factory()->create([
            'hotel_name' => 'Hotel Name 2',
            'department_name' => 'Management Department',
            'department_id' => Department::first(),
            'full_name' => 'Alyssa Cazarte',
            'age' => 21,
            'address' => 'Cebu City, Philippines',
            'email' => '1allysa.cazerte@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make(39232),
            'contact_number' => '+639124323',
            'role' => 'Senior Manager',
            'salary' => 57000,
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
