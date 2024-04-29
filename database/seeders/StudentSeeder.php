<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                "role_id" => "3",
                "name" => "Alumno",
                "surname" => "Apellido1",
                "secondSurname" => "Apellido2",
                "birth" => "1980-05-02",
                "email" => "alumno@alumno.com",
                'email_verified_at' => now(),
                'password' => bcrypt('123456'),
                'remember_token' => Str::random(10),
            ],
        ]);
        \App\Models\Student::factory(19)->create();
    }
}
