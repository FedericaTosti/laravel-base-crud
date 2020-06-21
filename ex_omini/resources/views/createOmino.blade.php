@extends('layouts.main_layout')

@section('content')
  <h2>New employee</h2>

  @if ($errors->any())
    @foreach ($errors->all() as $error)
      <p>{{$error}}</p>
    @endforeach
  @endif

  <form class="" action="{{route('storeOmino')}}" method="post">

    @csrf
    @method("POST")

    <label for="firstName">Firstname</label>
    <input type="text" name="firstName" value="{{old("firstName")}}">
    <br>
    <label for="lastName">Lastname</label>
    <input type="text" name="lastName" value="{{old("lastName")}}">
    <br>
    <label for="address">Address</label>
    <input type="text" name="address" value="{{old("address")}}">
    <br>
    <label for="code">Code</label>
    <input type="text" name="code" value="{{old("code")}}">
    <br>
    <label for="state">State</label>
    <input type="text" name="state" value="{{old("state")}}">
    <br>
    <label for="phoneNumber">Phone number</label>
    <input type="text" name="phoneNumber" value="{{old("phoneNumber")}}">
    <br>
    <label for="role">Role</label>
    <input type="text" name="role" value="{{old("role")}}">
    <br> <br>

    <a href="{{route('home')}}"><button type="button" name="button">Back</button></a>

    <button type="submit" name="submit">Save</button>

  </form>

@endsection
