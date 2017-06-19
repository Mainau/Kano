<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requirement;
use App\Survey;

class RequirementsController extends Controller
{

    public function store(Survey $survey)
    {
        $surveyid = $survey->id;



        $this->validate(request(), [

            'keyword' => 'required',
            'functionalphrase' => 'required',
            'dysfunctionalphrase' => 'required'

        ]);

        auth()->user()->publish(
            new Requirement(request([ 'keyword', 'functionalphrase', 'dysfunctionalphrase']))
        );


        return redirect('/eingabe/' . $survey->id);
    }
}
