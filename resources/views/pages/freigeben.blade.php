
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
               <th style="background-color: #009b91; color:#FFFFFF">Anforderungen prüfen</th>
               <th style="background-color: #009b91; color:#FFFFFF">Anforderungen freigeben</th>
               <th>Ergebnis der Bewertung</th>
             </tr>
           </table>
          <br>
        </div>

      <h3 class="header left htwg-darkblue-text">Anforderungen zur Bewertung freigeben</h3>


      <form class="mailAdressen" method="POST" action="/freigeben">
        {{csrf_field()}}
        <div class="row center-left">
          <h7 class="header col s12 light">Bitte geben Sie hier die entsprechenden Mailadressen ein:</h7>
        </div>
  <div class="chips chips-initial" data-index="0" data-initialized="true"><div class="chip">Apple<i class="material-icons close">close</i></div><input id="8b5569af-5975-18f7-cff5-94a3cd46377f" class="input" placeholder=""></div>

    <div class="row center-right">
         <button href="freigeben" id="add-button" class="btn-small waves-effect right htwg-darkblue" style="height: 50px; width: 50px;">+</button>
       </div>


          <br><br>
          <div class="row center-right">
            <input type="submit" value="Senden" id="freigeben-button" class="btn-large waves-effect right htwg-darkblue" style="display: flex;  flex-direction: column; justify-content: center; align-items: center;  height: 50px; width: 180px;">
          </div>
    <div class="buttons" >
    <div class="row center-right">
      <a href="pruefen" id="eingabe-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;"  >Zurück</a>
    </div>
    <div class="row center-right">
      <a href="ergebnis" id="eingabe-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;"  >Weiter</a>
    </div>

  </form>
  <br><br>
  </div>
    </div>
      </div>

      <script>   $('.chips').material_chip();
  $('.chips-initial').material_chip({
    data: [{
      tag: 'Apple',
    }, {
      tag: 'Microsoft',
    }, {
      tag: 'Google',
    }],
  });
  $('.chips-placeholder').material_chip({
    placeholder: 'Enter a tag',
    secondaryPlaceholder: '+Tag',
  });
  $('.chips-autocomplete').material_chip({
    autocompleteOptions: {
      data: {
        'Apple': null,
        'Microsoft': null,
        'Google': null
      },
      limit: Infinity,
      minLength: 1
    }
  });
   $('.chips').on('chip.add', function(e, chip){

  });
        </script>
        </div>
