<?php

Route::get('showVehiclesReport', ['uses' => 'VehicleController@report']);

Route::get('sendOrder', ['uses' => 'OrderController@sendOrder']);
Route::post('sendOrder', ['uses' => 'OrderController@sendOrderPost']);

Route::get('sendOrderDestination', ['uses' => 'OrderController@sendOrderDestination']);
Route::post('sendOrderDestination', ['uses' => 'OrderController@sendOrderDestinationPost']);

Route::get('showAddressReport', ['uses' => 'AddressController@showAddressReport']);

Route::get('createAddress', ['uses' => 'AddressController@createAddress']);
Route::post('createAddress', ['uses' => 'AddressController@createAddressPost']);

Route::get('deleteAddress', ['uses' => 'AddressController@deleteAddress']);
Route::post('deleteAddress', ['uses' => 'AddressController@deleteAddressPost']);

Route::get('/', function()
{
	return View::make('index');
});
