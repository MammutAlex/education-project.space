<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{

    public function links()
    {
        return $this->belongsToMany(Link::class,'direction_link');
    }
}
