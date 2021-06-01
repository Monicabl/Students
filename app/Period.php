<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    public function students()
    {
        return $this->belongsToMany(User::class, 'period_user');
    }
    
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'subject_period');
    }

    public function parcials()
    {
        return $this->hasMany(Parcial::class);
    }
}
