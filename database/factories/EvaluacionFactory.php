<?php

namespace Database\Factories;

use App\Models\evaluacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = evaluacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'namev'=>$this->faker->randomElement(['1er evaluacion de matematicas','1er evaluacion de sociales','1er evaluacion de geografia' ,'2do evaluacion mate','2do evaluacion geografia','2do evaluacion ciencian naturales']),
            'descripcion'=>$this->faker->sentence(),
            'user_id'=>$this->faker->numberBetween(1,100),
            'tema_id'=>$this->faker->numberBetween(1,6),
            'fecha'=>$this->faker->randomElement(['2021-11-12 18:34:07','2021-12-6 18:34:07'])
           
        ];
    }
}
