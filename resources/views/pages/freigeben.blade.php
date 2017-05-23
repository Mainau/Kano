
@extends('layout')

@section('content')
<body class="htwg-lightblue">
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
               <th style="background-color: #009b91; color:#FFFFFF">Anforderungen prüfen</th>
               <th style="background-color: #009b91; color:#FFFFFF">Anforderungen freigeben</th>
               <th>Ergebnis der Bewertung</th>
             </tr>
           </table>
          <br>
        </div>

      <h3 class="header left htwg-darkblue-text">Anforderungen zur Bewertung freigeben</h3>

      <div class="mailAdressen">
        <div class="row center-left">
          <h7 class="header col s12 light">Bitte geben Sie hier die entsprechenden Mailadressen ein:</h7>
        </div>
        <div>
       <label type="text">
         <input id="mailAdresse" name="mailAdresse" placeholder="beispiel@example.com">
       </label>

       <div class="row center-right">
         <button href="freigeben" id="add-button" class="btn-small waves-effect right htwg-darkblue" style="height: 50px; width: 50px;">+</button>
       </div>

          <br><br>
    <div class="buttons" >
    <div class="row center-right">
      <a href="pruefen" id="eingabe-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;"  >Zurück</a>
    </div>
    <div class="row center-right">
      <a href="ergebnis" id="uebersicht-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;">Freigeben</a>
    </div>
  </div>
  <br><br>
  </div>
    </div>
      </div>
        </div>
