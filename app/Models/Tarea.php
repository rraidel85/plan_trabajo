<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    public function areas(){
        return $this->hasMany(Area::class);
    }

    public function jefe(){
        return $this->belongsTo(User::class);
    }

    public function personas(){
        return $this->belongsToMany(User::class);
    }

    public function tipoOrigenes(){
        return $this->hasMany(TipoOrigen::class);
    }
}
