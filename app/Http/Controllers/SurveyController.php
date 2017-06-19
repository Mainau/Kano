<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;

class SurveyController extends Controller
{
    public function store(Survey $survey)
    {
        $this->validate(request(), [

            'name' => 'required',
            'beschreibung' => 'required'
        ]);


         auth()->user()->publish_survey(
            new Survey(request(['name', 'beschreibung']))
        );
        

        $survey = Survey::orderBy('created_at', 'desc')->first();



        return redirect('/eingabe/' . $survey->id );
    }
}
