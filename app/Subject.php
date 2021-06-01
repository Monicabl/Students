<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function periods()
    {
        return $this->belongsToMany(Period::class, 'subject_period');
    }
}
