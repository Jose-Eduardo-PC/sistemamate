<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = new user();
        
$this->call(RolSeeder::class);  
$this->call(UserSeeder::class);
$this->call(CursoSeeder::class);
$this->call(AsistenciaSeeder::class);
$this->call(MateriaSeeder::class);
$this->call(TemaSeeder::class);
$this->call(EvaluacionSeeder::class);
$this->call(ActividadSeeder::class);
$this->call(User_cursoSeeder::class);

    }
}
