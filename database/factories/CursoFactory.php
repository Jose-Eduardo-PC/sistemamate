<?php

namespace Database\Factories;

use App\Models\curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'namecur' => $this->faker->randomElement(['Comunicación', 'Inglés', 'Arte y Cultura', 'Ciencias ']),
            'grado' => $this->faker->randomElement(['1er grado', '2do grado', '3er grado']),
        ];
    }
}
