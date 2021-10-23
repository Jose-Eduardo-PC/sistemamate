<?php

namespace Database\Factories;


use App\Models\user_curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class User_cursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = user_curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>$this->faker->numberBetween(1, 100),
            'curso_id'=>$this->faker->numberBetween(1, 4),
            'estado'=>$this->faker->randomElement(['Finalizado','En Curso']),
        ];
    }
}
