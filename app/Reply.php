<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function survey() {
        return $this->belongsTo(Survey::class);
    }

    public function requirement() {
        return $this->belongsTo(Requirement::class);
    }
}
