<?php

namespace Database\Seeders;

use App\Models\Tarea;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $users_id = User::pluck('id')->toArray();
        // $tareas_id = Tarea::pluck('id')->toArray();

        // $users_id->shuffle();
        // $tareas_id->shuffle();

        // if($users_id && $tareas_id)
        // {
        //     for ($i = 0; $i <= $tareas_id->count() ; $i++) {
                
        //     }
        // }

        $users = User::all()->shuffle();    
        $tareas = Tarea::all()->shuffle()->toArray();  
        
        $tareas_copia = $tareas;

        for ($i = 0; $i <= $users->count(); $i++) {
            for ($j = 0; $j <= 3; $j++) {
                $users[$i]->tareas->save(array_pop($tareas_copia));  
           }  
           $tareas_copia = $tareas;
        }
    }
}
