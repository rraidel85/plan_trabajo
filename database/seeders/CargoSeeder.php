<?php

namespace Database\Seeders;

use App\Models\Cargo;
use Illuminate\Database\Seeder;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cargo::create(['nombre'=>'Rector', 'nivel'=> 1]);
        Cargo::create(['nombre'=>'Vicerrector Primero', 'nivel'=> 2]);
        Cargo::create(['nombre'=>'Vicerrector de Investigación de Posgrado', 'nivel'=> 3]);
        Cargo::create(['nombre'=>'Vicerrector Docente de Pregrado', 'nivel'=> 3]);
        Cargo::create(['nombre'=>'Decano', 'nivel'=> 4]);
        Cargo::create(['nombre'=>'Vicedecano de Investigación de Posgrado', 'nivel'=> 5]);
        Cargo::create(['nombre'=>'Vicedecano Docente de Pregrado', 'nivel'=> 5]);
        Cargo::create(['nombre'=>'Jefe de Departamento', 'nivel'=> 6]);
        Cargo::create(['nombre'=>'Secretario', 'nivel'=> 6]);
        Cargo::create(['nombre'=>'Jefe de Carrera', 'nivel'=> 7]);
        Cargo::create(['nombre'=>'Profesor Principal de Año', 'nivel'=> 8]);
        Cargo::create(['nombre'=>'Profesor', 'nivel'=> 9]);
    }
}
