<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docente>
 */
class DocenteFactory extends Factory
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
           'paterno'=>fake()->lastName(),
           'materno'=>fake()->lastName(),
           'nombres'=>fake()->firstName(8),
           'titulo' =>fake()->sentence(2),          
           'est_docente'=>fake()->randomNumber(8),
           'usuario_id'=>1,        
        ];
    }
}
