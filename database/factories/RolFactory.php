<?php

namespace Database\Factories;

use App\Models\rol;
use Illuminate\Database\Eloquent\Factories\Factory;

class RolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = rol::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->randomElement(['Estudiante','Profesor','Conserje el Exito']),
            'descripcion'=>$this->faker->sentence(),
        ];
    }
}
