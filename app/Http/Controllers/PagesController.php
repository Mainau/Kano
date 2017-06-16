<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requirement;
use App\SurveyParticipant;

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
    public function sendEmails(){
      $surveyParticipant = new SurveyParticipant;
      $surveyParticipant->user_email = request()->input('emailAdresse');
      $surveyParticipant->save();
      return view('pages.freigeben');
    }
}
