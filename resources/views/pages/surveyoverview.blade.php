@extends('layout')

@section('content')
  <nav class="htwg-darkblue" role="navigation">
    <!-- <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Kano</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div> -->
    <div class="nav-wrapper container">

      <!--  <img src="KANO-LOGO.jpg"  width="80px" height="80px"/> -->

    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">

    <div class="container">

      <div class="row center-left">
      <h3 class="header left htwg-darkblue-text" style="margin-left:10px">Kano Umfragen</h3>
    </div>


    <form method="POST" action="/createsurvey">
        {{csrf_field()}}

    <div class="row center-left">
      <h5>Neue Umfrage</h5>
      <br>


      <h7 class="header col s12 light">Name der Umfrage</h7>
   <label type="text">
     <input id="name" name="name" placeholder="Name eingeben...">
   </label>
 </div>

      <div class="row center-left">
        <h7 class="header col s12 light">Beschreibung der Umfrage</h7>
      </div>
      <div>
     <label type="text">
       <input id="beschreibung" name="beschreibung" placeholder="Beschreibung eingeben...">
     </label>
   </div>

      <div class="row center-right" >
      <div class="row center-right">
        <input value="Speichern" type="submit" id="eingabe-button" class="btn-large waves-effect right htwg-darkblue" style="display: flex;  flex-direction: column; justify-content: center; align-items: center;  height: 50px; width: 180px;">
      </div>

         </form>

        <h5>Ältere Umfragen</h5>
        <br>

        @foreach ($surveys as $survey)
            @include ('layouts.singlesurvey')
        @endforeach

    </div>


    </div>
  </div>
