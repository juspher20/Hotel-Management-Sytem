<?php

namespace Database\Seeders;

use App\Models\Chairman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
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
            'hotel_name' => 'Hotel 1',
            'chairman_id'=> Chairman::first(),
            'created_at' => now(),
            'updated_at'=>now()
        ]);

        // \App\Models\Department::factory()->create([
        //     'hotel_name' => 'Hotel 1',
        //     'chairman_id'=> Chairman::first(),
        //     'created_at' => now(),
        //     'updated_at'=>now()
        // ]);

    }
}
