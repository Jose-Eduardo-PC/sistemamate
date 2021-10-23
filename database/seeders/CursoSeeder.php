<?php

namespace Database\Seeders;

use App\Models\curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        curso::factory(4)->create();
    }
}
