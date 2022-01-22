<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserArea extends Pivot
{
    public function rol()
	{
	    return $this->belongsTo(Rol::class);
	}
}
