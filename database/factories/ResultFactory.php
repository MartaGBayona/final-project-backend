<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "grade" => "Apto",
            'student_id' => rand(1, 10),
            'teacher_id' => rand(1, 5),
            'subject_id' => rand(1, 13),
        ];
    }
}
