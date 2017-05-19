@extends('layout')

@section('content')
<body class="htwg-lightblue">
  <nav class="htwg-darkblue" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Kano</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="right">
      <a href="http://materializecss.com/getting-started.html" id="weiter-Button" class="btn-small waves-effect waves-light htwg-darkblue">--></a>
    </div>
    <div class="container">
      <br><br>
      <h3 class="header left htwg-darkblue-text">Anforderungserhebung</h3>
      <div class="row center-left">
        <h7 class="header col s12 light">Bitte geben Sie hier Ihre Anforderungen ein (funktional)</h7>
      </div>
      <div>
     <label type="text">
       <input id="funktional" name="funktional">
     </label>
   </div>
      <div class="row center-left">
        <h7 class="header col s12 light">Bitte geben Sie hier Ihre Anforderungen ein (dysfunktional)</h7>
      </div>
      <label type="text">
        <input id="dysfunktional" name="dysfunktional">
      </label>
      <div class="row center-right">
        <a href="pages.pruefen" id="download-button" class="btn-large waves-effect waves-light right htwg-darkblue">Zur Übersicht</a>
      </div>

      <br><br>

    </div>

  </div>
