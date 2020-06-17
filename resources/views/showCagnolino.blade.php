@extends('main_layout')

@section('main')
  <div>
    Nome: {{$cagnolino["nome"]}}<br>
    Tipo: {{$cagnolino["tipo"]}}<br>
    Altezza: {{$cagnolino["altezza"]}}<br>
    Peso: {{$cagnolino["peso"]}}<br>
  </div>
@endsection
