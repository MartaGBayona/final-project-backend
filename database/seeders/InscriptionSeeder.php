<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inscriptions')->insert([
            [
                'student_id' => "1",
                'course_id' => "3",
            ],
            [
                'student_id' => "2",
                'course_id' => "2",
            ],
            [
                'student_id' => "3",
                'course_id' => "2",
            ],
            [
                'student_id' => "9",
                'course_id' => "1",
            ],
            [
                'student_id' => "7",
                'course_id' => "1",
            ],
            [
                'student_id' => "6",
                'course_id' => "2",
            ]
        ]);
        // \App\Models\Inscription::factory(10)->create();
    }
}
