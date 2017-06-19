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

       Name der Kano Umfrage: {{ $survey->name}}


        {!! Form::open(array('action'=>array('ReplyController@store', $survey->id))) !!}
        @foreach ($survey->requirements as $requirement)
            @include ('layouts.requirement')
        @endforeach



      <br></br>


        {{ Form::submit('Speichern', array('class'=>'btn-large waves-effect right htwg-darkblue')) }}
        {!! Form::close() !!}

      <br></br>


    </div>
  </div>
  <i"radio" id="Das würde mir sehr helfen" value="Das würde mir sehr helfen"></input>

</body>
