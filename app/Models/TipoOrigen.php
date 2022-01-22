<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoOrigen extends Model
{
    use HasFactory;

    protected $fillable = [
        'tarea_id',
    ];

    protected $table = "tipo_origenes";

    public function tarea(){
        return $this->belongsTo(Tarea::class);
    }
}
