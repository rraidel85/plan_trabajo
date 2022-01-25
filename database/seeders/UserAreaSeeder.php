<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Cargo;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        // $out->writeln(gettype($tareas));

        $users = User::all()->shuffle();    
        $areas_id = Area::pluck('id')->shuffle()->all();
        $cargos_id = Cargo::pluck('id')->shuffle()->all();
        
        $areas_copia = array_slice($areas_id,0,3);


        foreach($users as $user)
        {
            $user->areas()->attach([
                $areas_copia[0] => ['cargo_id' => $cargos_id[array_rand($cargos_id)]],
                $areas_copia[1] => ['cargo_id' => $cargos_id[array_rand($cargos_id)]],
                $areas_copia[2] => ['cargo_id' => $cargos_id[array_rand($cargos_id)]],
            ]);

            shuffle($areas_id);
            $areas_copia = array_slice($areas_id,0,3);
        }
    }
}
