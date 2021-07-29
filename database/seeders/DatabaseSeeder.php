<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(Languages::class); 
        $this->call(ApprovalStatusSeeder::class); 
        $this->call(FileTypeSeeder::class); 
        $this->call(BloodGroupSeeder::class); 
    }
}
