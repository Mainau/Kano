<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function participants(){
      return $this->hasMany(SurveryPartipant::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

}
