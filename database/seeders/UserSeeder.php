<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
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
        \App\Models\User::factory()->count(5)->teacher()->create();
        \App\Models\User::factory()->count(20)->student()->create();
    }
}
