<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/manufact', function () {
    return view('manufactProcess');
});

Route::get('/water', function () {
    return view('water');
});

Route::get('/solidWaste', function () {
    return view('solidWaste');
});

Route::get('/emission', function () {
    return view('emission');
});

Route::get('/noise', function () {
    return view('noise');
});

Route::get('/energy', function () {
    return view('energy');
});

Route::get('/fuel', function () {
    return view('fuel');
});

Route::get('/recyle', function () {
    return view('recyle');
});

Route::get('/geoLocation', function () {
    return view('geoLocation');
});

Route::get('/emergency', function () {
    return view('emergency');
});

//----- sithara made start ----

// ------ industry Details ------
Route::get('/industry' , 'IndustryController@index'); // list the Industries
Route::get('/industry/create' , 'IndustryController@create'); // add new Industries
Route::get('/industry/{id}' , 'IndustryController@show'); // display Industries
Route::get('/industry/{id}/edit' , 'IndustryController@edit'); // edit Industries
Route::get('/industry/delete' , 'IndustryController@delete'); // delete Industries
// ------ end of industry Details ------

// ------ appliction Details ------
Route::get('/appliction' , 'ApplicationController@index'); // list the Applications
Route::get('/appliction/create' , 'ApplicationController@create'); // add new Applications
Route::get('/appliction/{id}' , 'ApplicationController@show'); // display Applications
Route::get('/appliction/{id}/edit' , 'ApplicationController@edit'); // edit Applications
Route::get('/appliction/delete' , 'ApplicationController@delete'); // delete Applications
// ------ end of appliction Details ------

// ------ payment Details ------
Route::get('/payment' , 'PaymentController@index'); // list the Payment
Route::get('/payment/create' , 'PaymentController@create'); // add new Payment
Route::get('/payment/{id}' , 'PaymentController@show'); // display Payment
Route::get('/payment/{id}/edit' , 'PaymentController@edit'); // edit Payment
Route::get('/payment/delete' , 'PaymentController@delete'); // delete Payment
// ------ end of appliction Details ------

//----- sithara made end ----