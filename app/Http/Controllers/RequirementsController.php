<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requirement;
use App\Survey;
use Auth;

class RequirementsController extends Controller
{

    public function store(Survey $survey, Request $request)
    {

        $me = Auth::user();

/*

        $this->validate(request(), [

            'keyword' => 'required',
            'functionalphrase' => 'required',
            'dysfunctionalphrase' => 'required'

        ]);

        auth()->user()->publish(
            new Requirement(request([ 'keyword', 'functionalphrase', 'dysfunctionalphrase', 'survey_id']))
        );
    */
        $requirement = new Requirement;
        $requirement->keyword = $request->keyword;
        $requirement->functionalphrase = $request->functionalphrase;
        $requirement->dysfunctionalphrase = $request->dysfunctionalphrase;
        $requirement->user_id = $me->id;
        $requirement->survey_id = $survey->id;

        $requirement->save();


        return redirect('/eingabe/' . $survey->id);
    }
}
