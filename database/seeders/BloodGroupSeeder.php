<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BloodGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['blood_group_name' => 'A+', 'status' => 1],
            ['blood_group_name' => 'A-', 'status' => 1],
            ['blood_group_name' => 'B+', 'status' => 1],
            ['blood_group_name' => 'B-', 'status' => 1],
            ['blood_group_name' => 'O+', 'status' => 1],
            ['blood_group_name' => 'O-', 'status' => 1],
            ['blood_group_name' => 'AB+', 'status' => 1],
            ['blood_group_name' => 'AB-', 'status' => 1],
            ['blood_group_name' => 'None', 'status' => 1]
         ];
 
        DB::table('blood_groups')->insert($data);
    }
}
