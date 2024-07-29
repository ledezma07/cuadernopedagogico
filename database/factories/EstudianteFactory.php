<?php

namespace Database\Factories;
use App\Models\Estudiante;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ci'=>fake()->randomNumber(8),
            'exp'=>fake()->stateAbbr(),
            'paterno'=>fake()->lastName(),
            'materno'=>fake()->lastName(),
            'nombres'=>fake()->lastName(),
            'rude'=>fake()->randomNumber(8),
            'f_nac'=>fake()->date($format = 'Y-m-d', $max = 'now'),
            'edad'=>fake()->randomNumber(2),
            'est_inscripcion'=>fake()->monthName($max = 'now'), 
            'usuario_id'=>1,
        ];
    }
}
