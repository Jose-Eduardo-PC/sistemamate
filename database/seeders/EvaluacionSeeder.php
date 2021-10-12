<?php

namespace Database\Seeders;

use App\Models\evaluacion;
use Illuminate\Database\Seeder;

class EvaluacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        evaluacion::factory(50)->create();
    }
}
