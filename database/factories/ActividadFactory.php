<?php

namespace Database\Factories;

use App\Models\actividad;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActividadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = actividad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->randomElement(['1er evaluacion de matematicas','1er evaluacion de sociales','1er evaluacion de geografia' ,'2do evaluacion mate','2do evaluacion geografia','2do evaluacion ciencian naturales']),
            'descripcion'=>$this->faker->sentence(),
            'tema_id'=>$this->faker->numberBetween(1,6),
        ];
    }
}
