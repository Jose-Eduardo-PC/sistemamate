<?php

namespace Database\Factories;

use App\Models\asistencia;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsistenciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = asistencia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>$this->faker->numberBetween(1,100),
            'estado'=>$this->faker->randomElement(['presente','retrasado','falta']),
            'fecha'=>$this->faker->randomElement(['2021-11-12 18:34:07','2021-12-6 18:34:07'])
        ];
    }
}
