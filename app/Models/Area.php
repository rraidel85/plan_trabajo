<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public function roles(){
        return $this->belongsToMany(Rol::class);
    }

    public function tarea(){
        return $this->belongsTo(Tarea::class);
    }

    public function personas(){
        return $this->belongsToMany(User::class,'user_area')
            ->using(UserArea::class)
            ->withPivot(['rol_id']);
    }
}
