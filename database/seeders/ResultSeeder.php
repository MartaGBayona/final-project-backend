<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('results')->insert([
            [
                "grade" => "Apto",
                'student_id' => "1",
                'teacher_id' => "3",
                'subject_id' => "1"
            ],
            [
                "grade" => "Apto",
                'student_id' => "2",
                'teacher_id' => "1",
                'subject_id' => "2"
            ],
            [
                "grade" => "Apto",
                'student_id' => "3",
                'teacher_id' => "2",
                'subject_id' => "5"
            ],
            [
                "grade" => "Apto",
                'student_id' => "9",
                'teacher_id' => "5",
                'subject_id' => "3"
            ],
        ]);

        // \App\Models\Result::factory(10)->create();
    }
}
