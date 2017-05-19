
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
        <img src="KANO-LOGO.jpg"  width="80px" height="80px"/>
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
               <th style="background-color: #009b91; color:#FFFFFF">Ergebnis der Bewertung</th>
             </tr>
           </table>
           <br>
           </div>
      <h3 class="header left htwg-darkblue-text">Ergebnisanzeige</h3>

          <br><br>
    <div class="buttons" >
    <div class="row center-right">
      <a href="freigeben" id="uebersicht-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;">Exportieren</a>
    </div>
  </div>
  <br><br>
  </div>
