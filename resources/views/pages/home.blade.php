
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
      <br><br>
      <h1 class="header center htwg-darkblue-text">Kano-Umfrage</h1>
      <div class="row center">
        <h5 class="header col s12 light">Tool zur Anforderungserhebung und Priorisierung nach Kano</h5>
      </div>
      <div class="row center">
        <a href="eingabe" id="beginn-button" class="btn-large waves-effect htwg-darkblue">Beginnen</a>
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
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center htwg-green-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>
@stop
