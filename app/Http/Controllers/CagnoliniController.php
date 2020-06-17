<?php

namespace App\Http\Controllers;
use App\Cagnolino;
use Illuminate\Http\Request;

class CagnoliniController extends Controller
{

  public function index(){

    $allCagnolini = Cagnolino::all();
    // dd($allCagnolini);
    return view("home", compact('allCagnolini'));
  }

  public function showCagnolino($id){

    $cagnolino = Cagnolino::findOrFail($id);
    return view("showCagnolino", compact('cagnolino'));
  }
}
