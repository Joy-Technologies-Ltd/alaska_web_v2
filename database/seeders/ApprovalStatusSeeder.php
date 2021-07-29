<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ApprovalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['approval_status' => 'Pending', 'status' => 1],
            ['approval_status' => 'Approved', 'status' => 1],
            ['approval_status' => 'Decline', 'status' => 1],
            ['approval_status' => 'Blocked', 'status' => 1],
        ];

        DB::table('approvel_statuses')->insert($data);
    }
}
