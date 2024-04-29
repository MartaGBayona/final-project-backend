<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('files')->insert([
            [
                'file_path' => 'documento1',
                'student_id' => "1",
                'teacher_id' => "3",
                'subject_id' => "1"
            ],
            [
                'file_path' => 'documento2',
                'student_id' => "2",
                'teacher_id' => "1",
                'subject_id' => "2"
            ],
            [
                'file_path' => 'documento3',
                'student_id' => "3",
                'teacher_id' => "2",
                'subject_id' => "5"
            ],
            [
                'file_path' => 'documento4',
                'student_id' => "9",
                'teacher_id' => "5",
                'subject_id' => "3"
            ],
        ]);

        // \App\Models\File::factory(10)->create();
    }
}
