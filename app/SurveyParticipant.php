<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyParticipant extends Model
{
    //
    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

}
