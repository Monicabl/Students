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

    public function getQualificationScore($subject_id, $parcial_id)
    {
        $qualification = Qualification::where('user_id', $this->id)
        ->where('parcial_id', $parcial_id)
        ->where('subject_id', $subject_id)->first();

        if($qualification) {
            return $qualification->score;
        }

        return null;
    }
}
