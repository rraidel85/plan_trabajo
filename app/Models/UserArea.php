<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserArea extends Pivot
{

	protected $fillable = [
        'user_id',
		'area_id',
		'rol_id',
    ];

    public function rol()
	{
	    return $this->belongsTo(Rol::class);
	}
}
