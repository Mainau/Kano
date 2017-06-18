
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

        <table id="fortschritt">
              <tr>
               <th style="background-color: #009b91; color:#FFFFFF">Anforderungen eingeben</th>
               <th style="background-color: #009b91; color:#FFFFFF">Anforderungen prüfen</th>
               <th style="background-color: #009b91; color:#FFFFFF">Anforderungen freigeben</th>
               <th style="background-color: #009b91; color:#FFFFFF">Ergebnis der Bewertung</th>
             </tr>
           </table>
           <br>

      <h3 class="header left htwg-darkblue-text">Ergebnisanzeige</h3>

<div class="row center-right">
<div class="row right" id="ergebnisTabelle">
  <table >
          <tr>
           <th><b>Anforderung</b></th>
           <th><b>Kategorie</b></th>
         </tr>
         <tr>
           <td>Wetteranzeige</td>
           <td>Basismerkmal</td>
         </tr>
         <tr>
           <td>Regenwarnung</td>
           <td>Begeisterungsmerkmal</td>
         </tr>
         <tr>
           <td>Unwetterwarnung</td>
           <td>Leistungsmerkmal</td>
         </tr>
         <tr>
           <td>Sonnenwarnung</td>
           <td>Rückweisungsmerkmal</td>
         </tr>
     </table>

     <br><br>

         <div class="buttons" id="exportButton">
     <div class="row center-right">
      <a href="" id="exportieren-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;">Exportieren</a>
</div>
     </div>
  <br><br>
   </div>
   <div class="row left" id="diagramm">
     <!-- <table id="ergebnisTabelle">
             <tr>
              <th><b>Hier muss das Diagramm hin</b></th>
              <th><b>...</b></th>
            </tr>
            <tr>
              <td>...</td>
              <td>...</td>
            </tr>
            <tr>
              <td>...</td>
              <td>...</td>
            </tr>
        </table> -->
<svg width="350" height="350">
<line x1="0" y1="0" x2="0" y2="350" style="stroke:black;stroke-width:4"/>
<line x1="350" y1="350" x2="0" y2="350" style="stroke:black;stroke-width:4"/>
<line id="trennLinie" x1="175" y1="350" x2="175" y2="0"/>
<line id="trennLinie" x1="350" y1="175" x2="0" y2="175"/>
</svg>
     <br><br>
      </div>
  </div>

  </div>
  </div>
