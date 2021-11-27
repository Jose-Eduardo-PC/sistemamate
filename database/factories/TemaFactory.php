<?php

namespace Database\Factories;

use App\Models\tema;
use Illuminate\Database\Eloquent\Factories\Factory;

class TemaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tema::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nametm' => $this->faker->randomElement(['Áreas de conocimiento', 'Ciencias de la Naturaleza', 'Ciencias Sociales', 'Lengua castellana y literatura', 'Biografías', 'Arte']),
            'descripcion' => $this->faker->sentence(),
            'materia_id' => $this->faker->numberBetween(1, 5),

        ];
    }
}
