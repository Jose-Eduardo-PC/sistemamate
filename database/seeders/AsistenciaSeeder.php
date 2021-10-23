<?php

namespace Database\Seeders;

use App\Models\asistencia;
use Illuminate\Database\Seeder;

class AsistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        asistencia::factory(100)->create();
    }
}
