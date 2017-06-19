<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }

    public function surveys()
    {
        return $this->hasMany(Survey::class);
    }


    public function publish(Requirement $requirement)
    {
        $this->requirements()->save($requirement);
    }

    public function publish_survey(Survey $survey)
    {
        $this->surveys()->save($survey);
    }
}
