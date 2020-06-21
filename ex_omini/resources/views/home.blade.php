@extends('layouts.main_layout')

@section('content')

  @if (session("success"))
    <p>{{session("success")}}</p>
  @endif

  <h3>
    <a href="{{route("createOmino")}}">New employee</a>
  </h3>

  <ol>
    @foreach ($allomini as $omino)
      <li>
        {{$omino["firstName"]}}{{$omino["lastName"]}}

        <a href="{{route('showOmino', $omino['id'])}}"><button type="button" name="button">Employee information</button></a>
      </li>
      <br>
    @endforeach
  </ol>

@endsection
