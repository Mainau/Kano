<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requirement;
use App\SurveyParticipant;
use Illuminate\Mail\Mailer;
use App\Mail\SurveyInvitation;

class PagesController extends Controller
{
    public function home()
    {

        return view('pages.home');

    }

    public function eingabe(){

        return view('pages.eingabe') ;

    }

    public function pruefen(){

        $requirements = Requirement::where('survey_id', '=', 1)->get();

        return view('pages.pruefen', compact('requirements')) ;

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

    public function befragung(){

      return view ('pages.befragung');

    }

    public function anmeldung(){

      return view ('pages.anmeldung');

    }
    //Zum Testen wird Mailtrap.io verwendet. Alle gesendeten Emails werden an das dort
    //angelegte Emailfach gesendet. Um auch bei euch diesen Dienst nutzen zu können müsst
    //ihr einen entsprechenden Account anlegen und die Login-Daten in der .env hinterlegen
    public function sendEmails(Request $request, Mailer $mailer){
      $surveyParticipant = new SurveyParticipant;
      $surveyParticipant->user_email = request()->input('emailAdresse');
      $surveyParticipant->save();
      $mailer->to($request->input('emailAdresse'))->send(new SurveyInvitation(auth()->user()->$name));
      return redirect()->back();
    }
}
