<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserArea extends Pivot
{

	public $incrementing = true;
    
    public function cargo()
	{
	    return $this->belongsTo(Cargo::class);
	}
}
