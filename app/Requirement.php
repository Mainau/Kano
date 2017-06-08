<?php

namespace App;

class Requirement extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
