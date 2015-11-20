<?php

Route::get('showVehiclesReport', ['uses' => 'VehicleController@report']);

Route::get('sendOrder', ['uses' => 'OrderController@sendOrder']);
Route::post('sendOrder', ['uses' => 'OrderController@sendOrderPost']);

Route::get('sendOrderDestination', ['uses' => 'OrderController@sendOrderDestination']);
Route::post('sendOrderDestination', ['uses' => 'OrderController@sendOrderDestinationPost']);

Route::get('/', function()
{
	return View::make('index');
});
