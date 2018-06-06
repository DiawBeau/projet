<?php

use App\Training;


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
/*
Route::get('/trains', function () {

	$trains = Training::all();
    return view('trains.index',compact('trains'));
});

Route::get('/trains/{train}', function ($id) {

	$train = Training::find($id);
    return view('trains.show',compact('train'));
});

*/
Route::get('/', function () {

    return view('welcome');
});

Route::get('/adherants', 'AdherantsController@index');

//Route::get('adherants/delete/{id}', 'AdherantsController@destroy');


Route::get('/adherants/create', 'AdherantsController@create');


Route::get('/adherants/{adherant}', 'AdherantsController@show');

Route::get('/adherants/{adherant}/edit', 'AdherantsController@edit');

//Route::post('/adherants/{adherant}', 'AdherantsController@update');

Route::post('/adherants', 'AdherantsController@store');

