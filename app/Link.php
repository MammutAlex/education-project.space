<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public function directions()
    {
        return $this->belongsToMany(Direction::class);
    }
}
