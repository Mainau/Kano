
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


      <form class="mailAdressen" id="mailAdressen" method="POST" action="/freigeben">
        {{csrf_field()}}
        <div class="row center-left">
          <h7 class="header col s12 light">Bitte geben Sie hier die entsprechenden Emailadressen ein:</h7>
        </div>
  <div class="chips chips-initial" data-index="0" data-initialized="true"><div class="chip">apple<i class="material-icons close">close</i></div><input id="8b5569af-5975-18f7-cff5-94a3cd46377f" class="input" placeholder=""></div>
<div id= 'errorMes' name='errorMes' style="visibility:hidden; color:red;">Keine Email!</div>
 <input type='hidden' id= 'hiddenField' name='id' value='' />
@if($errors->any())
<h6>Der versendete Link:</h6>
<a href="{{$errors->first()}}">127.0.0.1:8000{{$errors->first()}}</a>
@endif



            <br><br>

          <div class="row center-right">
            <button onClick="sendEmails()" id="freigeben-button" class="btn-large waves-effect right htwg-darkblue" style="display: flex;  flex-direction: column; justify-content: center; align-items: center;  height: 50px; width: 180px;">Senden</button>
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
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="{{asset('js/materialize.js')}}"></script>
      <script src="{{asset('js/init.js')}}"></script>

      <script>

      var emails=[];
      function validateEmail(email) {
          var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(email);
        }
        $('.chips').on('chip.add', function(e, chip){

          if(validateEmail(chip.tag)){
              emails.push(chip.tag);
          }
          else{
            $('.chip').last().remove();
            $('#errorMes').css({opacity: 1.0, visibility: "visible"}).animate({opacity: 0}, 1000);
        }});

        $('.chips').on('chip.delete', function(e, chip){
          for(var i = 0; i < emails.length; i++) {
              if(emails[i] == chip.tag) {
                emails.splice(i, 1);
                break;
              }
            }
        });

        $('.chips').material_chip();
  $('.chips-initial').material_chip({});
  $('.chips-placeholder').material_chip({
    placeholder: 'Email eingeben',
    secondaryPlaceholder: 'Email eingeben',
  });

   $('.chips').on('chip.add', function(e, chip){

  });

  function sendEmails(){
    document.getElementById('hiddenField').value = emails.toString();
    document.getElementById("mailAdressen").submit();
  }
        </script>
