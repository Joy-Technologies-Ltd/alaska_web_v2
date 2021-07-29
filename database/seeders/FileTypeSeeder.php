<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class FileTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['type_name' => 'Image', 'image' => 'image.png', 'status' => 1],
            ['type_name' => 'PDF', 'image' => 'pdf.png', 'status' => 1],
            ['type_name' => 'Doc', 'image' => 'doc.png', 'status' => 1],
            ['type_name' => 'XLSX', 'image' => 'xlsx.png', 'status' => 1],
            ['type_name' => 'Audio', 'image' => 'audio.png', 'status' => 1],
            ['type_name' => 'Video', 'image' => 'video.png', 'status' => 1],
        ];

        DB::table('file_types')->insert($data);
    }
}
