<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const TYPE_STUDENT= 'estudiante';
    const TYPE_ADMIN= 'administrador';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function periods()
    {
        return $this->belongsToMany(Period::class, 'period_user');
    }

    public function getQualification($subject_id, $period_id)
    {
        return Qualification::where('user_id', $this->id)
        ->where('period_id', $period_id)
        ->where('subject_id', $subject_id)->first();
    }
}
