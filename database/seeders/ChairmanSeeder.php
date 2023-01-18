<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ChairmanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employees')->insert([
            'hotel_name' => 'Hotel',
            'full_name' => 'Mike Santos',
            'age' => 35,
            'address' => 'Earth',
            'email' => 'mikesantos123@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make(123432342),
            'contact_number' => '+639132423',
            'status' => 'active',
            'created_at' => now(),
            'updated_at'=>now()
        ]);
    }
}
