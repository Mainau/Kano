
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

    <form method="POST" action="/login">
        {{csrf_field()}}
    <div>
   <label>
     <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail-Adresse eingeben..." required>
   </label>
   <label>
     <input type="password" class="form-control" id="password" name="password" placeholder="Passwort eingeben..." required>
   </label>
   <div class="row center-right">
     <input type="submit" value="Anmelden" id="uebersicht-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;">
   </div>
   @include('layouts.errors')
 </div>
 </form>

 <div class="row center-left">
 <h3 class="header left htwg-darkblue-text">Registrierung</h3>
</div>

<form method="POST" action="/register">
    {{csrf_field()}}

<div>
<label>
<input type="email" class="form-control" id="email" name="email" placeholder="E-Mail-Adresse eingeben..." required>
</label>
<label>
<input type="password" class="form-control" id="password" name="password" placeholder="Passwort eingeben..." required>
</label>
<label>
<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Passwort erneut eingeben..." required>
</label>
<div class="row center-right">
  <input type="submit" value="Registrieren" id="uebersicht-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;">
</div>
</div>
@include('layouts.errors')
</form>

    </div>
  </div>
