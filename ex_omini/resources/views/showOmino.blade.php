@extends('layouts.main_layout')
@section('content')

  <h2>Employee information</h2>

  @if (session("success"))
    <p>{{session("success")}}</p>
  @endif

  <span>Firstname and Lastname:</span>
  {{$omino["firstName"]}} {{$omino["lastName"]}}
  <br>
  <span>Address:</span>
  {{$omino["address"]}}
  <br>
  <span>Code:</span>
  {{$omino["code"]}}
  <br>
  <span>State:</span>
  {{$omino["state"]}}
  <br>
  <span>Phone number:</span>
  {{$omino["phoneNumber"]}}
  <br>
  <span>Role:</span>
  {{$omino["role"]}}
  <br> <br>

  <a href="{{route('home')}}"><button type="button" name="button">Back</button></a>

  <a href="{{route("editOmino",$omino["id"])}}"><button type="button" name="button">Edit</button></a>

  <a href="{{route("deleteOmino", $omino['id'])}}"> <button type="button" name="button">Delete</button></a>

@endsection
