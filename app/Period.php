<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    public function students()
    {
        return $this->belongsToMany(User::class, 'period_user');
    }
}
