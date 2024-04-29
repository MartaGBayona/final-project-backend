<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Role;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $teacherRoleId = Role::where('roleName', 'teacher')->value('id');
        return [
            'role_id' => $teacherRoleId,
            'name' => $this->faker->name(),
            'surname' => $this->faker->name(),
            'secondSurname' => $this->faker->name(),
            'birth' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
            'remember_token' => Str::random(10),
        ];
    }
}
