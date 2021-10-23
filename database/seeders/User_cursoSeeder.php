<?php

namespace Database\Seeders;

use App\Models\user_curso;
use Illuminate\Database\Seeder;

class User_cursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user_curso::factory(100)->create();
    }
}
