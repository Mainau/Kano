@extends('layout')

@section('content')
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