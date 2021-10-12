<?php

namespace Database\Seeders;

use App\Models\actividad;
use Illuminate\Database\Seeder;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        actividad::factory(50)->create();
    }
}
