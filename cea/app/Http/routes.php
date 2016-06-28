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

Route::get('/manufacture', function () {
    return view('manufaacure');
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


//manufacture

Route::get('/manufacture', 'ManufactureController@index');


//industry

Route::get('/industry', 'IndustryController@index');

Route::get('industry/create', 'IndustryController@create');

Route::get('industry/show', 'IndustryController@show');

//category 

Route::get('/category', 'CategoryController@index');

Route::get('category/create', 'CategoryController@create');

Route::get('category/{id}', 'CategoryController@show');

Route::get('category/{id}/edit', 'CategoryController@edit');

//Inspection

Route::get('/inspection', 'InspectionController@index');

Route::get('inspection/create', 'InspectionController@create');

Route::get('inspection/{id}', 'InspectionController@show');

Route::get('inspection/{id}/edit', 'InspectionController@edit');