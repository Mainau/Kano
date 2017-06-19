<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\Reply;
use App\Requirement;
use App\SurveyParticipant;
use Illuminate\Mail\Mailer;
use App\Mail\SurveyInvitation;
use Auth;
use DB;
use Illuminate\Http\RedirectResponse;

class PagesController extends Controller
{
    public function home()
    {

        return view('pages.home');

    }

    public function kontakt(){

        return view('pages.kontakt') ;

    }

    public function impressum(){

        return view('pages.impressum') ;

    }

    public function eingabe(Survey $survey){

        return view('pages.eingabe', compact('survey')) ;



    }

    public function pruefen(Survey $survey){

        $requirements = Requirement::where('survey_id', '=', $survey->id)->get();

        return view('pages.pruefen', compact('requirements'), compact('survey')) ;

    }

    public function freigeben(){

        return view('pages.freigeben') ;

    }

    public function ergebnis(){

        return view('pages.ergebnis') ;

    }

    public function startseite(){

      return view ('pages.startseite');

    }

    public function fertig(){

      return view ('pages.fertig');

    }


    public function anmeldung(){

      return view ('pages.anmeldung');

    }

    public function umfrageliste(){

        $me = Auth::user();

        $surveys = Survey::where('user_id', '=', $me->id)->get();

        return view ('pages.surveyoverview', compact('surveys'));

    }

    public function uebersicht(Survey $survey){

        $replies = Reply::where('survey_id', '=', $survey->id)->get();

        return view ('pages.replyoverview', compact('survey'), compact('replies'));

    }



    //Zum Testen wird Mailtrap.io verwendet. Alle gesendeten Emails werden von dem dort
    //angelegten Emailfach empfangen. Um auch bei euch diesen Dienst nutzen zu können, müsst
    //ihr einen entsprechenden Account anlegen und die Login-Daten in der .env hinterlegen
    public function sendEmails(Request $request, Mailer $mailer){
      $id = Auth::user()->id;
      $surveyID=DB::table('users')
        ->join('surveys', function ($join) use($id){
            $join->on('users.id', '=', 'surveys.user_id')
                 ->where('surveys.user_id', '=',$id );
        })
        //->select('surveys.id')
        ->latest('surveys.created_at')->first()->id;


       $request=request();
    if($request->id!=null){
      $emails=explode(',',$request->input('id'));
      for($i=0;$i<sizeOf($emails); $i++){
        $surveyParticipant = new SurveyParticipant;
        $surveyParticipant->user_email = $emails[$i];
        $surveyParticipant->save();
        $mailer->to($emails[$i])->send(new SurveyInvitation(auth()->user()->name, $surveyID));

      }
    }else{

      }

      return redirect()->back()->withErrors(['/befragung/'.$surveyID]);


    }


    public function befragung(Survey $survey){


        $requirements = Requirement::where('survey_id', '=', $survey->id)->get();
      return view ('pages.befragung', compact('survey'), compact('requirements'));

    }
}
