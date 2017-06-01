
@extends('layout')

@section('content')
<body class="htwg-lightblue">
  <nav class="htwg-darkblue" role="navigation">
    <!-- <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Kano</a></li> -->
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
    <div class="nav-wrapper container">
      <!--  <img src="KANO-LOGO.jpg"  width="80px" height="80px"/>-->
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <div class="row center-left">
      <h3 class="header left htwg-darkblue-text">Anmeldung</h3>
    </div>
    <div>
   <label type="text">
     <input id="emailAnmeldung" name="emailAnmeldung" placeholder="E-Mail-Adresse eingeben...">
   </label>
   <label type="text">
     <input id="passwort" name="passwort" placeholder="Passwort eingeben...">
   </label>
   <div class="row center-right">
     <a href="eingabe" id="uebersicht-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;">Anmelden</a>
   </div>
 </div>

 <div class="row center-left">
 <h3 class="header left htwg-darkblue-text">Registrierung</h3>
</div>
<div>
<label type="text">
<input id="emailRegistrierung" name="emailRegistrierung" placeholder="E-Mail-Adresse eingeben...">
</label>
<label type="text">
<input id="passwort" name="passwort" placeholder="Passwort eingeben...">
</label>
<label type="text">
<input id="passwort" name="passwort" placeholder="Passwort erneut eingeben...">
</label>
<div class="row center-right">
  <a href="eingabe" id="uebersicht-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;">Registrieren</a>
</div>
</div>

    </div>
  </div>
