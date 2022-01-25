<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserArea extends Pivot
{

    
    public function cargo()
	{
	    return $this->belongsTo(Cargo::class);
	}
}
