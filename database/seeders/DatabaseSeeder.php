<?php

namespace Database\Seeders;

use App\Models\Cargo;
use App\Models\Tarea;
use App\Models\UserArea;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CargoSeeder::class,
            AreaSeeder::class,
            TareaSeeder::class,
            UserTareaSeeder::class,
            UserAreaSeeder::class,
        ]);
    }
}
