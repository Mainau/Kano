
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
      @if (Auth::check())
          <a href="logout">logout</a>
      @endif
    </div>

  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center htwg-darkblue-text">Kano-Umfrage</h1>
      <div class="row center">
        <h5 class="header col s12 light">Tool zur Anforderungserhebung und Priorisierung nach Kano</h5>
      </div>
      <div class="row center">
          @if (Auth::check())
          <a href="eingabe" id="beginn-button" class="btn-large waves-effect htwg-darkblue">Beginnen</a>
          @else
          <a href="anmeldung" id="beginn-button" class="btn-large waves-effect htwg-darkblue">Anmelden</a>
          @endif
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center htwg-green-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Schnelle Erfassung Ihrer Anforderungen</h5>

            <p class="light">Erfassen Sie ihre Anforderungen wahlweise über eine Schablone oder wählen Sie die freie Erfassung. Das Kano-Tool bietet Ihnen die Möglichkeit funktionale und dysfunktionale Anforderungen zu erfassen und diese nach erneuter Prüfung als Link an alle zu befragenden Personen zu senden.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center htwg-green-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Einfache Durchführung der Umfrage</h5>

            <p class="light">Nach dem Erhalt des Umfrage-Links können ihre Umfrage-Teilnehmer diese  sofort online bei KANO ausfüllen oder diese zu einem späteren Zeitpunkt online bei KANO aufrufen.   KANO unterstützt die Teilnehmer beim vollständigen Ausfüllen Ihrer Umfrage und erkennt Unvollständigkeiten direkt.
</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center htwg-green-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Klare Übersicht der Ergebnisse</h5>

            <p class="light">KANO informiert Sie über den Abschluss aller ihrer Befragungen. Sie erhalten darauf automatisch die Auswertung Ihrer Umfrage. Die Ergebnisse können Sie direkt exportieren oder jederzeit online abrufen.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>
@stop
