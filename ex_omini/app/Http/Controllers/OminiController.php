<?php

namespace App\Http\Controllers;

use App\Omino;
use Illuminate\Http\Request;

class OminiController extends Controller
{

  public function index() {
    $allomini = Omino::all();
    return view('home', compact("allomini"));
  }

  public function show($id){
    $omino = Omino::findOrFail($id);
    return view('showOmino', compact("omino"));
  }

  // per modifica
  public function edit($id){
    $omino = Omino::findOrFail($id);
    return view('editOmino', compact("omino"));
  }
  // per modifica
  public function update(Request $request, $id){
    // $ominoData = $request->all();
    $ominoData = $request -> validate([
      'firstName' => "required|alpha",
      'lastName' => "required",
      'address' => "required",
      'code' => "required|integer",
      'state' => "required",
      'phoneNumber' => "required|integer",
      'role' => "required"
    ]);

    $omino = Omino::findOrFail($id);

    $omino -> firstName = $ominoData["firstName"];
    $omino -> lastName = $ominoData["lastName"];
    $omino -> address = $ominoData["address"];
    $omino -> code = $ominoData["code"];
    $omino -> state = $ominoData["state"];
    $omino -> phoneNumber = $ominoData["phoneNumber"];
    $omino -> role = $ominoData["role"];

    $omino -> save();

    return redirect() -> route("showOmino", $id)
                      -> withSuccess("Employee " . $omino["firstName"] . " " . $omino["lastName"] . " successfully updated");
  }

  //per eliminazione
  public function delete($id){
    $omino = Omino::findOrFail($id)->delete();

    return redirect() -> route("home")
                      -> withSuccess("Employee " . $omino["firstName"] . " " . $omino["lastName"] . " successfully deleted");
  }

  // per inserimento nuovo
  public function create(){
    return view('createOmino');
  }

  public function store(Request $request){
    // $ominoData = $request->all();

    $ominoData = $request -> validate([
      'firstName' => "required|alpha",
      'lastName' => "required",
      'address' => "required",
      'code' => "required|integer",
      'state' => "required",
      'phoneNumber' => "required|integer",
      'role' => "required"
    ]);

    $omino= new Omino;

    $omino -> firstName = $ominoData["firstName"];
    $omino -> lastName = $ominoData["lastName"];
    $omino -> address = $ominoData["address"];
    $omino -> code = $ominoData["code"];
    $omino -> state = $ominoData["state"];
    $omino -> phoneNumber = $ominoData["phoneNumber"];
    $omino -> role = $ominoData["role"];

    $omino -> save();

    return redirect() -> route("home")
                      -> withSuccess("Employee " . $omino["firstName"] . " " . $omino["lastName"] . " successfully added");
  }
}
