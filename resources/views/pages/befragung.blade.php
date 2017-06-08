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
                <th style="background-color: #009b91; color:#FFFFFF"></th>
                <th></th>
                  <th></th>
                  <th></th>
                    <th></th>

             </tr>
           </table>
          <br>
        </div>
      <h5 style="text-align:left">Fragestellung zur Anforderungserhebung </h5>
      <div style="border:1px solid black;padding:5px">
        <p style="font-size:18;font-weight:bold">Das System weist den Nutzer darauf hin, wie das Wetter heute wird.</p>
            <br></br>
        <br></br>
      </div>
      <table id="radioTable">
        <tr>
          <td>
            <p> Bitte bewerten Sie die Anforderungen</p>
                <form action="">
                <input type="radio" name="rating" id="Das würde mir sehr helfen"> Das würde mir sehr helfen </input><br/>
                <input type="radio" name="rating" id="Das ist eine grundlegende Anforderung für mich"> Das ist eine grundlegende Anforderung für mich </input><br/>
                <input type="radio" name="rating" id="Das würde mich nicht betreffen"> Das würde mich nicht betreffen </input><br/>
                <input type="radio" name="rating" id="Das wäre eine geringe Unanehmlichkeit für mich"> Das wäre eine geringe Unannehmlichkeit für mich </input><br/>
                <input type="radio" name="rating" id="Das wäre ein großes Problem für mich"> Das wäre ein großes Problem für mich </input><br/>
                </form>
          </td>
          <td>
            <p> Wie wichtig ist diese Anforderung für Sie?</p>
                 <input type="radio" name="importance" id="Überaus wichtig"> Überaus wichtig </input><br/>
                 <input type="radio" name="importance" id="sehr wichtig"> Sehr wichtig </input><br/>
                 <input type="radio" name="importance" id="wichtig"> Wichtig </input><br/>
                 <input type="radio" name="importance" id="Ein wenig wichtig"> Ein wenig wichtig </input><br/>
                 <input type="radio" name="importance" id="Überhaupt nicht wichtig"> Überhaupt nicht wichtig </input>
          </td>
        </tr>
      </table>
      <br></br>

      <div class="row center-right">
        <a href="fertig" id="eingabe-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;"  >Weiter</a>
      </div>
      <br></br>


    </div>
  </div>
  <i"radio" id="Das würde mir sehr helfen" value="Das würde mir sehr helfen"></input>

</body>
