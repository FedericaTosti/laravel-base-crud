<?php

use Illuminate\Support\Facades\Route;

// nome e cognome
Route::get('/', "OminiController@index") ->name("home");
// informazioni
Route::get('/showOmino/{id}', 'OminiController@show')->name("showOmino");

// per modifica
Route::get('/editOmino/{id}', 'OminiController@edit')->name("editOmino");
Route::post('/updateOmino/{id}', 'OminiController@update')->name("updateOmino");

//per eliminazione
Route::get('/deleteOmino/{id}', 'OminiController@delete')->name("deleteOmino");

// per inserimento nuovo
Route::get('/createOmino', 'OminiController@create')->name("createOmino");
Route::post('/storeOmino', 'OminiController@store')->name("storeOmino");
