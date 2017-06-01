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
      <div>
        <table id="fortschritt">
              <tr>
               <th style="background-color: #009b91; color:#FFFFFF">Anforderungen eingeben</th>
               <th>Anforderungen prüfen</th>
               <th>Anforderungen freigeben</th>
               <th>Ergebnis der Bewertung</th>
             </tr>
           </table>
          <br>
        </div>
      <div class="row center-left">
      <h3 class="header left htwg-darkblue-text" style="margin-left:10px">Anforderungseingabe</h3>
    </div>
    <div class="schabloneAnzeigen">
      <input type="checkbox" class="hackbox schablone" id="schabloneID">
      <label class="schablone" for="schabloneID">Schablone zur Formulierung Ihrer Anforderungen</label>
      <br><br>
            <span class="schabloneSpan">Hier könnte Ihre Schablone stehen! :)<br></span>
      <br><br>
    </div>
    <div class="row center-left">
      <h7 class="header col s12 light">Bitte benennen Sie hier Ihre Anforderungen ein (Stichwort)</h7>
   <label type="text">
     <input id="stichwort" name="stichwort" placeholder="Stichwort eingeben...">
   </label>
 </div>

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

      <div class="row center-right" >
      <div class="row center-right">
        <a href="eingabe" id="eingabe-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;"  >Weiter</a>
      </div>
      <div class="row center-right">
        <a href="pruefen" id="uebersicht-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;">Zur Übersicht</a>
      </div>
    </div>
    </div>
  </div>
