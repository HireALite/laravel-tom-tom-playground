<?php

class OrderController extends BaseController
{
	private function getVehicles()
	{
		$vehicles = TomTom::showVehicleReport();
		$vehicles_array = [];

		foreach ($vehicles as $vehicle) {
			$vehicles_array[$vehicle->objectuid] = $vehicle->objectno. " - " . $vehicle->objectname;
		}

		return $vehicles_array;
	}
	public function sendOrder()
	{
		$vehicles_array = $this->getVehicles();

		return View::make('orders.send', compact('vehicles_array'));
	}

	public function sendOrderPost()
	{
		$objectuid = Input::get('objectuid');

		Session::put('objectuid', $objectuid);

		return Response::json(TomTom::sendOrder([
			'objectuid' => $objectuid,
			'orderid' => Input::get('orderid'),
			'ordertext' => Input::get('ordertext')
		]));
	}

	public function sendOrderDestination()
	{
		$vehicles_array = $this->getVehicles();
		$date = Carbon::now()->addHour();

		return View::make('orders.send-destination', compact('vehicles_array', 'date'));
	}

	public function sendOrderDestinationPost()
	{
		$objectuid = Input::get('objectuid');

		Session::put('objectuid', $objectuid);

		$long = Input::get('longitude');
		$lat = Input::get('latitude');

		if(!empty($long)) {
			$long = $long * 1000000;
		}

		if(!empty($lat)) {
			$lat = $lat * 1000000;
		}

		return Response::json(TomTom::sendDestinationOrder([
			'objectuid' => $objectuid,
			'orderid' => Input::get('orderid'),
			'ordertext' => Input::get('ordertext'),
			'orderdate' => Input::get('orderdate'),
			'ordertime' => Input::get('ordertime'),
			'arrivaltolerance' => Input::get('arrivaltolerance'),
			'notify_enabled' => Input::get('notify_enabled'),
			'notify_leadtime' => Input::get('notify_leadtime'),
			'contact' => Input::get('contact'),
			'contacttel' => Input::get('contacttel'),
			'longitude' => $long,
			'latitude' => $lat,
			'country' => Input::get('country'),
			'zip' => Input::get('zip'),
			'city' => Input::get('city'),
			'street' => Input::get('street'),
			'useorderstates' => Input::get('useorderstates'),
			'orderautomations' => Input::get('orderautomations'),
			'wp' => Input::get('wp'),
			'mapcode' => Input::get('mapcode'),
		]));
	}
}