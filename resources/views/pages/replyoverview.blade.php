@extends('layout')

@section('content')
  <h4>{{ $survey->name }}</h4>
  <table class="bordered striped">
    <thead>
    <tr>
      <th data-field="id">Question</th>
      <th data-field="name">Answer(s)</th>
    </tr>
    </thead>

    <tbody>
    @forelse ($survey->requirements as $item)
      <tr>
        <td>{{ $item->keyword }}</td>
        @foreach ($item->replies as $reply)
          <td>{{ $reply->funcitonalscore }} <br/></td>
          <td>{{ $reply->dysfunctionalscore }} <br/></td>
          <td>{{ $reply->importance }} <br/></td>
        @endforeach
      </tr>
    @empty
      <tr>
        <td>
          No answers provided by you for this Survey
        </td>
        <td></td>
      </tr>
    @endforelse
    </tbody>
  </table>
@endsection