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
  <style type="text/css">
    #angemeldetAls{
      visibility: hidden;
    }
    #logoutheader{
      visibility: hidden;
    }
  </style>

<style>
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  }
  th, td {
  padding: 5px;
  }
</style>

  <h3>{{ $survey->name }}</h3>

    @forelse ($survey->requirements as $item)

        <h5>{{ $item->keyword }}</h5>
        <table style="width:100%">
          <tr>
            <th>User</th>
            <th>Funktional</th>
            <th>Disfunktional</th>
            <th>Wichtigkeit</th>
          </tr>
        @foreach ($item->replies as $reply)
          @if($reply->survey_id == $survey->id)

            <tr>
            <td>{{ $reply->user_id }}</td>
            <td>{{ $reply->functionalscore }}</td>
          <td>{{ $reply->dysfunctionalscore }}</td>
          <td>{{ $reply->importance }}</td>
            </tr>
            @endif
            @endforeach
        </table>

    @empty
      <tr>
        <td>
          No answers provided by you for this Survey
        </td>
        <td></td>
      </tr>
    @endforelse

<br>
@endsection
