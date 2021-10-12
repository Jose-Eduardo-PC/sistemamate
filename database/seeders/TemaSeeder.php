<?php

namespace Database\Seeders;

use App\Models\tema;
use Illuminate\Database\Seeder;

class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tema::factory(50)->create();
    }
}
