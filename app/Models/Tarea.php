<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    public function usuarios()
    {
        return $this->belongsToMany(User::class,'user_tarea')
                    ->withPivot('completada');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class,'created_by');
    }
}
