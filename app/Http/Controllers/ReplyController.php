<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\Reply;
use Auth;

class ReplyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, Survey $survey)
    {
        // remove the token
        $arr = $request->except('_token');
        foreach ($arr as $key => $value) {
            $newReply = new Reply();
            if (! is_array( $value )) {
                $newFuncValue = $value['func_answer'];
                $newImpValue = $value['imp_answer'];
                $newDysValue = $value['dys_answer'];

            } else {
                $newFuncValue = json_encode($value['func_answer']);
                $newImpValue = json_encode($value['imp_answer']);
                $newDysValue = json_encode($value['dys_answer']);

            }
            $newReply->functionalscore = $newFuncValue;
            $newReply->importance = $newImpValue;
            $newReply->dysfunctionalscore = $newDysValue;
            $newReply->requirement_id = $key;
            $newReply->user_id = Auth::id();
            $newReply->survey_id = $survey->id;

            $newReply->save();

            $replyArray[] = $newReply;
        };

        return view ('pages.startseite');
        // return redirect()->action('SurveyController@view_survey_answers', [$survey->id]);
    }
}
