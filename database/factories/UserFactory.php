<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Role;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $studentRoleId = Role::where('roleName', 'student')->value('id');
        $teacherRoleId = Role::where('roleName', 'teacher')->value('id');

        $isStudent = $this->faker->boolean();
        $data = [
            'role_id' => $studentRoleId,
            'name' => $this->faker->name(),
            'surname' => $this->faker->name(),
            'secondSurname' => $this->faker->name(),
            'birth' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
            'remember_token' => Str::random(10),
            
        ];
        if ($isStudent) {
            $data['role_id'] = $studentRoleId;
        } else {
            $data['role_id'] = $teacherRoleId;
        }

        return $data;
    }
    public function teacher()
    {
        return $this->state(function (array $attributes) {
            return [
                'role_id' => Role::where('roleName', 'teacher')->value('id'),
            ];
        });
    }

    public function student()
    {
        return $this->state(function (array $attributes) {
            return [
                'role_id' => Role::where('roleName', 'student')->value('id'),
            ];
        });
    }
}
