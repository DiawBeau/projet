<?php

use App\Training;
use App\Adherant;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/trains', function () {

	$trains = Training::all();
    return view('trains.index',compact('trains'));
});

Route::get('/trains/{train}', function ($id) {

	$train = Training::find($id);
    return view('trains.show',compact('train'));
});


Route::get('/', function () {

    return view('welcome');
});

Route::get('/adherants', function () {

	$adherants  = Adherant::all();
    return view('adherants.index',compact('adherants'));
});
