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

Route::get('/indDetails', function () {
    return view('indDetails');
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
