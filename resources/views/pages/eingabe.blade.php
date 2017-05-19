@extends('layout')

@section('content')
<body class="htwg-lightblue">
  <nav class="htwg-darkblue" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
        <!-- <li><a href="#">Kano</a></li> -->
      </ul>
          <img src="Kano\KANO-LOGO.jpg" width="80px" height="80px">
      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <h3 class="header left htwg-darkblue-text">Anforderungseingabe</h3>
      <div class="row center-left">
        <h7 class="header col s12 light">Bitte geben Sie hier Ihre Anforderungen ein (funktional)</h7>
      </div>
      <div>
     <label type="text">
       <input id="funktional" name="funktional" placeholder="funktionale Anforderung eingeben...">
     </label>
   </div>
      <div class="row center-left">
        <h7 class="header col s12 light">Bitte geben Sie hier Ihre Anforderungen ein (dysfunktional)</h7>
      </div>
      <label type="text">
        <input id="dysfunktional" name="dysfunktional" placeholder="dysfunktionale Anforderung eingeben...">
      </label>
      <br><br>
    </div>
    <div class="buttons" >
    <div class="row center-right">
      <a href="eingabe" id="eingabe-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;"  >Weiter</a>
    </div>
    <div class="row center-right">
      <a href="pruefen" id="uebersicht-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;">Zur Übersicht</a>
    </div>
  </div>
  <br><br>
  </div>
