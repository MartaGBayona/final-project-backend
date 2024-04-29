<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            [
                "role_id" => "1",
                "name" => "Director",
                "surname" => "Apellido1",
                "secondSurname" => "Apellido2",
                "birth" => "1980-05-02",
                "email" => "director@director.com",
                'email_verified_at' => now(),
                'password' => bcrypt('123456'),
                'remember_token' => Str::random(10),
            ],
            [
                "role_id" => "2",
                "name" => "Docente",
                "surname" => "Apellido1",
                "secondSurname" => "Apellido2",
                "birth" => "1980-05-02",
                "email" => "docente@docente.com",
                'email_verified_at' => now(),
                'password' => bcrypt('123456'),
                'remember_token' => Str::random(10),
            ],
        ]);
        \App\Models\Teacher::factory(5)->create();
    }
}
