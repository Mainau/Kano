<tr class="erstellteUmfrage">
  <td>{{$survey->surveys}}</td>
  <td>Umfrage von 20-05-2017</td>
  <td><a href="ergebnis" id="surveyAnsehen-button" class="btn-large waves-effect htwg-darkblue">Ansehen</a></td>
</tr>

<!-- in home: -->
<table>
  @foreach ($surveys as $survey)
    @include ('pages.erstellteUmfragen')
  @endforeach
</table>
