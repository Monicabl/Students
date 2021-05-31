<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcial extends Model
{
    public function period()
    {
        return $this->belongsTo(Perdiod::class);
    }
}
