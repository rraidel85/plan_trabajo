<?php

namespace Database\Seeders;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Creando el usuario administrador por defecto
        User::factory()->create([
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
            ]);

        //Creando los roles por defecto
        Rol::create([
            'nombre' => 'Administrador'
        ]);
        Rol::create([
            'nombre' => 'Jefe'
        ]);
        Rol::create([
            'nombre' => 'Lector'
        ]);

        $this->call([
            UserSeeder::class,
            RolSeeder::class,
            TareaSeeder::class,
            AreaSeeder::class,
            TipoOrigenSeeder::class,
        ]);
    }
}
