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
               <th>Anforderungen prüfen</th>
               <th>Anforderungen freigeben</th>
               <th>Ergebnis der Bewertung</th>
             </tr>
           </table>
          <br>
        </div>
      <div class="row center-left">
      <h3 class="header left htwg-darkblue-text" style="margin-left:10px">Anforderungseingabe</h3>
    </div>
    <div class="schabloneAnzeigen">
      <input type="checkbox" class="hackbox schablone" id="schabloneID">
      <label class="schablone" for="schabloneID">Schablone und Tipps zur Formulierung Ihrer Anforderungen</label>
      <br><br>
            <span class="schabloneSpan"><img src="/img/schablone.png" alt="Schablone zur Anforderungsformulierung"/><br></span>
            <span class="schabloneSpan"><p> Quelle:Johner institut, Nutzungsanforderungen,URL:https://www.johner-institut.de/blog/tag/nutzungsanforderungen/(Stand:18.06.2017)</p></span>
<br>
            <span class="schabloneSpan"><h5>Als Hilfestellung zum Formulieren von Nutzungsanforderungen empfehlen wir die Inhalte folgende Webseiten</h5>
<br>
            <p>- Allgemeine Übersicht zur Formulierung von Nutzungsanforderungen:</p>
            <a href="https://www.johner-institut.de/blog/tag/nutzungsanforderungen/">Johner Institut: Nutzungsanforderungen</a>
            <br>
            <a href="https://www.johner-institut.de/blog/category/iec-62366-usability/">Johner Institut: IEC 62366</a>
            <br>
            <a href="http://www.dakks.de/sites/default/files/71_sd_2_007_leitfaden_usability_1.3_0.pdf">dakks: Usability Leitfaden</a>
            <br>
            <p>- Informationen und Hilfestellungen zum Usability-Engineering:<p>
            <a href="http://www.procontext.de/aktuelles/2012/06/nutzungskontext-erfordernisse-anforderungen-und-loesung-das-arbeitsmodell-des-usability-engineering.html">Procontext: Arbeitsmodell-Usability-Enginnering</a>
            <br>
            <a href="http://www.procontext.de/aktuelles/2011/09/begriffe-im-usability-engineering-und-requirements-engineering.html">Procontext: wichtige Begriffe im Usability-Engenieering</a>
            <br>
            <a href="http://www.procontext.de/aktuelles/2014/02/nutzungsanforderungen-von-anderen-stakeholder-anforderungen-unterscheiden.html">Procontext: Nutzungsanforderungen und Anforderungen</a>
            <br>
            <a href="http://www.procontext.de/aktuelles/2010/06/das-neue-common-industry-format-for-usabilityrelated-information-cif.html">Procontext: Usability-Prozess</a>
            <br>
            <a href="http://www.procontext.de/aktuelles/2010/02/was-ist-usability-wirklich.html">Procontext: Usability-Engineering</a>
            <br>
            <a href="http://www.procontext.de/aktuelles/2006/08/die-neue-din-en-iso-9241-110.html">Procontext: Usability-Normung</a></span>
            

      <br><br>
    </div>

    <form method="POST" action="/createrequirement">
        {{csrf_field()}}

    <div class="row center-left">
      <h5>Ihre Anforderung</h5>
      <br>
      <h7 class="header col s12 light">Bitte benennen Sie hier Ihre Anforderungen (Stichwort)</h7>
   <label type="text">
     <input id="stichwort" name="keyword" placeholder="Stichwort eingeben...">
   </label>
 </div>

      <div class="row center-left">
        <h7 class="header col s12 light">Bitte geben Sie hier Ihre Anforderung ein (funktional)</h7>
      </div>
      <div>
     <label type="text">
       <input id="funktional" name="functionalphrase" placeholder="funktionale Anforderung eingeben...">
     </label>
   </div>

      <div class="row center-left">
        <h7 class="header col s12 light">Bitte geben Sie hier Ihre Anforderung ein (dysfunktional)</h7>
      </div>
      <label type="text">
        <input id="dysfunktional" name="dysfunctionalphrase" placeholder="dysfunktionale Anforderung eingeben...">
      </label>

      <div class="row center-right" >
      <div class="row center-right">
        <input value="Speichern" type="submit" id="eingabe-button" class="btn-large waves-effect right htwg-darkblue" style="display: flex;  flex-direction: column; justify-content: center; align-items: center;  height: 50px; width: 180px;">
      </div>

         </form>
         <div class="row center-right">
           <a href="pruefen" type="submit" id="uebersicht-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;">Zur Übersicht</a>
         </div>
    </div>


    </div>
  </div>
