<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('pages.pruefen') ;
    }

    public function freigeben(){

        return view('pages.freigeben') ;
    }

    public function ergebnis(){

        return view('pages.ergebnis') ;
    }

}
