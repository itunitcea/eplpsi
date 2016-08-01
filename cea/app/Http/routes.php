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

Route::get('/about', function () {
    return view('about');
});

//Route::get('/manufact', function () {
//    return view('manufactProcess');
//});

//Route::get('/water', function () {
//    return view('water');
//});

//Route::get('/solidWaste', function () {
//    return view('solidWaste');
//});

//Route::get('/emission', function () {
//    return view('emission');
//});

//Route::get('/noise', function () {
//    return view('noise');
//});
//
//Route::get('/energy', function () {
//    return view('energy');
//});
//
//Route::get('/fuel', function () {
//    return view('fuel');
//});
//
//Route::get('/recyle', function () {
//    return view('recyle');
//});
//
//Route::get('/geoLocation', function () {
//    return view('geoLocation');
//});
//
//Route::get('/emergency', function () {
//    return view('emergency');
//});

//----- sithara made start ----



//// ------ appliction Details ------
//Route::get('/appliction' , 'ApplicationController@index'); // list the Applications
//Route::get('/appliction/create' , 'ApplicationController@create'); // add new Applications
//Route::get('/appliction/{id}' , 'ApplicationController@show'); // display Applications
//Route::get('/appliction/{id}/edit' , 'ApplicationController@edit'); // edit Applications
//Route::get('/appliction/delete' , 'ApplicationController@delete'); // delete Applications
//// ------ end of appliction Details ------
//
//// ------ payment Details ------
//Route::get('/payment' , 'PaymentController@index'); // list the Payment
//Route::get('/payment/create' , 'PaymentController@create'); // add new Payment
//Route::get('/payment/{id}' , 'PaymentController@show'); // display Payment
//Route::get('/payment/{id}/edit' , 'PaymentController@edit'); // edit Payment
//Route::get('/payment/delete' , 'PaymentController@delete'); // delete Payment
//// ------ end of appliction Details ------

//----- sithara made end ----

//-------------Hansi routesStarts ---------------

//category 
Route::get('/category', 'CategoryController@index');
Route::get('category/create', 'CategoryController@create');
Route::get('category/{id}', 'CategoryController@show');
Route::get('category/{id}/edit', 'CategoryController@edit');
Route::post('/category', 'CategoryController@store'); //this is used to add data
Route::put('/category/{id}', 'CategoryController@update');// this used to update data

//province
Route::get('/province', 'ProvinceController@index');
Route::get('province/create', 'ProvinceController@create');
Route::get('province/{id}', 'ProvinceController@show');
Route::get('province/{id}/edit', 'ProvinceController@edit');
Route::post('/province', 'ProvinceController@store'); //this is used to add data
Route::put('/province/{id}', 'ProvinceController@update');// this used to update data


//Sector
//

//province
Route::get('/sector', 'SectorController@index');
Route::get('sector/create', 'SectorController@create');
Route::get('sector/{id}/show', 'SectorController@show');
Route::get('sector/{id}/edit', 'SectorController@edit');
Route::post('/sector', 'SectorController@store'); //this is used to add data
Route::put('/sector/{id}', 'SectorController@update');// this used to update data

// industry
//Route::get('/industry', function () {
//    return view('industry.index');
//});

//Route::get('/industry', 'IndustryController@index'); // list the Industries
//Route::get('/industry/create', 'IndustryController@create'); // add new Industries
//Route::get('/industry/{id}/show', 'IndustryController@show'); // display Industries
//Route::get('/industry/{id}/edit', 'IndustryController@edit'); // edit Industries
//Route::post('/industry', 'IndustryController@store'); //this is used to add data
//Route::get('/industry/delete', 'IndustryController@delete'); // delete Industries
//
//// Inspection
//Route::get('/inspection', 'InspectionController@index');
//Route::get('inspection/create', 'InspectionController@create');
//Route::get('inspection/{id}', 'InspectionController@show');
//Route::get('inspection/{id}/edit', 'InspectionController@edit');
//Route::post('/inspection', 'InspectionController@store'); //this is used to add data
//Route::put('/inspection/{id}', 'InspectionController@update');// this used to update data
////

// --- edited on 2016/07/08 ----
Route::get('/eplApplication', function () {
    return view('EPLApplication');
});

//Route::get('/manufact', function () {
//    return view('manufactProcess');
//});

// Water // No database found
Route::get('/water', 'WaterController@index');
Route::get('water/create', 'WaterController@create');
Route::get('water/{id}/show', 'WaterController@show');
Route::get('water/{id}/edit', 'WaterController@edit');
Route::post('/water', 'WaterController@store'); //this is used to add data
Route::put('/water/{id}', 'WaterController@update');// this used to update data
//
// SolidWaste
Route::get('/solidWaste', 'SolidWasteController@index');
Route::get('solidWaste/create', 'SolidWasteController@create');
Route::get('solidWaste/{id}/show', 'SolidWasteController@show');
Route::get('solidWaste/{id}/edit', 'SolidWasteController@edit');
Route::post('/solidWaste', 'SolidWasteController@store'); //this is used to add data
Route::put('/solidWaste/{id}', 'SolidWasteController@update');// this used to update data

// Atmospheric Emission
Route::get('/atmospheric', 'AtmosphericController@index');
Route::get('atmospheric/create', 'AtmosphericController@create');
Route::get('atmospheric/{id}', 'AtmosphericController@show');
Route::get('atmospheric/{id}/edit', 'AtmosphericController@edit');
Route::post('/atmospheric', 'AtmosphericController@store'); //this is used to add data
Route::put('/atmospheric/{id}', 'AtmosphericController@update');// this used to update data
//
Route::get('/searchind', 'SearchIndustryController@searchindustry');
//
//
//
//-------------Hansi routes End ---------------
//--------------------------------------------------------------


## DropDownController - for Dropdown Functions
#Dropdown Controllers for AJAX
Route::get('ajaxviews/district', ['as' => 'district', 'uses' => 'DropDownController@getDistrictDropdown']);
Route::get('ajaxviews/localauthority', ['as' => 'localauthority', 'uses' => 'DropDownController@getLocalAuthorityDropdown']);
Route::get('epl-licence', ['as' => 'epl:licence', 'uses' => 'DropDownController@getEplLicence']);

// ------ industry Details ------
Route::get('/industry' , 'IndustryController@index'); // list the Industries
Route::get('/industry/create' , 'IndustryController@create'); // add new Industries
Route::get('/industry/{id}/show' , 'IndustryController@show'); // display Industries
Route::get('/industry/{id}/edit' , 'IndustryController@edit'); // edit Industries
Route::get('/industry/delete' , 'IndustryController@delete');

//-----------------------------------------------------------------


// sithar edit
// ------ industry Details -----
//Route::get('/industry' , 'IndustryController@index'); // list the Industries
//Route::get('/industry/create' , 'IndustryController@create'); // add new Applications
//Route::get('/industry/{id}/show' , 'IndustryController@show'); // display Applications
//Route::get('/industry/{id}/edit' , 'IndustryController@edit'); // edit Applications
//Route::post('/industry', 'IndustryController@store'); //this is used to add data
//Route::put('/industry/{id}', 'IndustryController@update');// this used to update data
// ------ end of industry Details ------

// ------ appliction Details ------
Route::get('/application' , 'ApplicationController@index'); // list the Applications
Route::get('/application/create' , 'ApplicationController@create'); // add new Applications
Route::get('/application/{id}/show' , 'ApplicationController@show'); // display Applications
Route::get('/application/{id}/edit' , 'ApplicationController@edit'); // edit Applications
Route::get('/application/delete' , 'ApplicationController@delete'); // delete Applications
// ------ end of appliction Details ------

// ------ payment Details ------
Route::get('/payment' , 'PaymentController@index'); // list the Payment
Route::get('/payment/create' , 'PaymentController@create'); // add new Payment
Route::get('/payment/{id}/show' , 'PaymentController@show'); // display Payment
Route::get('/payment/{id}/edit' , 'PaymentController@edit'); // edit Payment
Route::get('/payment/delete' , 'PaymentController@delete'); // delete Payment
// ------ end of appliction Details ------

// -------- atmosphere Details -------
 Route::get('/atmosphericEmission' , 'AtmosphericController@index'); // list the atmosphericEmission
Route::get('/atmosphericEmission/create' , 'AtmosphericController@create'); // add new atmosphericEmission
Route::get('/atmosphericEmission/{id}/show' , 'AtmosphericController@show'); // display atmosphericEmission
Route::get('/atmosphericEmission/{id}/edit' , 'AtmosphericController@edit'); // edit atmosphericEmission
Route::get('/atmosphericEmission/delete' , 'AtmosphericController@delete'); // delete atmosphericEmission
// -------- End of atmosphere Details -------

// -------- noise Details -------
 Route::get('/noise' , 'NoiseController@index'); // list the noise
Route::get('/noise/create' , 'NoiseController@create'); // add new noise
Route::get('/noise/{id}/show' , 'NoiseController@show'); // display noise
Route::get('/noise/{id}/edit' , 'NoiseController@edit'); // edit noise
Route::get('/noise/delete' , 'NoiseController@delete'); // delete noise
// -------- End of Noise Details -------
//
// -------- energy_reqt Details -------
 Route::get('/energy_reqt' , 'Energy_reqtController@index'); // list the energy_reqt
Route::get('/energy_reqt/create' , 'Energy_reqtController@create'); // add new energy_reqt
Route::get('/energy_reqt/{id}/show' , 'Energy_reqtController@show'); // display energy_reqt
Route::get('/energy_reqt/{id}/edit' , 'Energy_reqtController@edit'); // edit energy_reqt
Route::get('/energy_reqt/delete' , 'Energy_reqtController@delete'); // delete energy_reqt
// -------- End of energy_reqt Details -------
//
// -------- fuel Details -------
 Route::get('/fuel' , 'FuelController@index'); // list the fuel
Route::get('/fuel/create' , 'FuelController@create'); // add new fuel
Route::get('/fuel/{id}/show' , 'FuelController@show'); // display fuel
Route::get('/fuel/{id}/edit' , 'FuelController@edit'); // edit fuel
Route::get('/fuel/delete' , 'FuelController@delete'); // delete fuel
// -------- End of fuel Details -------
//
// -------- recycle Details -------
Route::get('/recycle' , 'RecycleController@index'); // list the recycle
Route::get('/recycle/create' , 'RecycleController@create'); // add new recycle
Route::get('/recycle/{id}/show' , 'RecycleController@show'); // display recycle
Route::get('/recycle/{id}/edit' , 'RecycleController@edit'); // edit recycle
Route::get('/recycle/delete' , 'RecycleController@delete'); // delete recycle
//
// -----------GeographicalLocation ----------
Route::get('/geographicalLocation' , 'GeographicalLocationController@index'); // list the geographicalLocation
Route::get('/geographicalLocation/create' , 'GeographicalLocationController@create'); // add new geographicalLocation
Route::get('/geographicalLocation/{id}/show' , 'GeographicalLocationController@show'); // display geographicalLocation
Route::get('/geographicalLocation/{id}/edit' , 'GeographicalLocationController@edit'); // edit geographicalLocation
Route::get('/geographicalLocation/delete' , 'GeographicalLocationController@delete'); // delete geographicalLocation

// -----------Emergency Contact ----------
Route::get('/emergency' , 'EmergencyContactController@index'); // list the Emergency Contact
Route::get('/emergency/create' , 'EmergencyContactController@create'); // add new Emergency Contact
Route::get('/emergency/{id}/show' , 'EmergencyContactController@show'); // display Emergency Contact
Route::get('/emergency/{id}/edit' , 'EmergencyContactController@edit'); // edit Emergency Contact
Route::get('/emergency/delete' , 'EmergencyContactController@delete'); // delete Emergency Contact

//Manufacturing Process
Route::get('/manufacture', 'ManufactureController@index');
Route::get('manufacture/create', 'ManufactureController@create');
Route::get('manufacture/{id}/show', 'ManufactureController@show');
Route::get('manufacture/{id}/edit', 'ManufactureController@edit');
Route::post('/manufacture', 'ManufactureController@store'); //this is used to add data
Route::put('/manufacture/{id}', 'ManufactureController@update');// this used to update data

/**
 * Search Industry
 */

Route::get('/searchind', 'SearchIndustryController@index');

Route::get('/inspectionUsers_groups', function () {
    return view('inspectionUsers_groups');
});


// Inspection Group
Route::get('/inspectiongroup', 'InspectiongroupController@index');
Route::get('inspectiongroup/create', 'InspectiongroupController@create');
Route::get('inspectiongroup/{id}/show', 'InspectiongroupController@show');
Route::get('inspectiongroup/{id}/edit', 'InspectiongroupController@edit');
Route::post('/inspectiongroup', 'InspectiongroupController@store'); //this is used to add data
Route::put('/inspectiongroup/{id}', 'InspectiongroupController@update');// this used to update data