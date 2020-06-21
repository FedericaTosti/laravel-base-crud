@extends('main_layout')

@section('main')
  <div>
    @foreach ($allCagnolini as $cagnolino)
      Nome: <a href="{{route("showCagnolino",$cagnolino["id"])}}"> {{$cagnolino["nome"]}} </a><br>
      {{-- Tipo: {{$cagnolino["tipo"]}}<br>
      Altezza: {{$cagnolino["altezza"]}}<br>
      Peso: {{$cagnolino["peso"]}}<br><br> --}}
    @endforeach
  </div>
@endsection
