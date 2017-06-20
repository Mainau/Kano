<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Kano-Plattform</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body class="htwg-lightblue">
<header class="htwg-darkblue" id="header" >
<div id="navi">
<nav class="htwg-darkblue" role="navigation">
  <div class="nav-wrapper container" id="logoutDiv">

                  @if (Auth::check())
                      <a id="logoutheader" class="row center" href="logout">Logout</a>
                  @endif
</div>

  <!-- <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="#">Kano</a></li> -->
    <!-- </ul> -->
<!--
    <ul id="nav-mobile" class="side-nav">
      <li><a href="#">Navbar Link</a></li>
    </ul> -->
    <!-- <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a> -->
  <!-- </div> -->
</nav>
</div>
<div id="angemeldetAls">   @if (Auth::check())
  <h7  > Eingeloggt als {{Auth::user()->email}}</h7>
  @endif
</div>

</header>



@yield('content')



  <!-- <nav class="htwg-darkblue" role="navigation"> -->
    <!-- <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Kano</a></li> -->
      <!-- </ul> -->

      <!-- <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div> -->



    <footer class="page-footer htwg-darkblue" id="footer">
        <div class="container" >
          <div class="row center-right">
            <div class="col l6 s12">


              <h7 class="grey-text text-lighten-4">Teamprojekt Gesundheitsinformatik</h7>
              <p class="grey-text text-lighten-4">Teammitglieder:
                Janina Beck, James Friesen, Katharina Lohr, Felix Schlicht, Sarah Schucker</p>
            </div>
            <div class="col l3 s12">
            <!--  <h5 class="white-text">Settings</h5>
              <ul>
                <li><a class="white-text" href="#!">Link 1</a></li>
                <li><a class="white-text" href="#!">Link 2</a></li>
                <li><a class="white-text" href="#!">Link 3</a></li>
                <li><a class="white-text" href="#!">Link 4</a></li>
              </ul>
            </div>-->
            <div class="col l3 s12 right">
            <h5 class="white-text">KANO</h5>
              <ul>
                <li><a class="white-text" href="home">Home</a></li>
                <li><a class="white-text" href="kontakt">Kontakt</a></li>
                <li><a class="white-text" href="impressum">Impressum</a></li>
                <!--<li><a class="white-text" href="#!">FAQ</a></li>
              </ul>-->
          </div>
          </div>
        </div>
      </div>

        <!-- <div class="footer-copyright">
          <div class="container">
          Made by <a class="htwg-green-text text-lighten-3" href="http://materializecss.com">Materialize</a>
          </div>
        </div> -->
      </footer>


  </body>
</html>
