<?php

class AddressController extends BaseController
{
	public function showAddressReport()
	{
		return Response::json(TomTom::showAddressReport());
	}

	public function createAddress()
	{
		return View::make('addresses.create');
	}

	public function createAddressPost()
	{
		$x = Input::get('positionx');
		$y = Input::get('positiony');

		if(!empty($x)) {
			$x = $x * 1000000;
		}

		if(!empty($y)) {
			$y = $y * 1000000;
		}

		return Response::json(TomTom::insertAddress([
			'addrnr' => Input::get('addrnr'),
			'addrname1' => Input::get('addrname1'),
			'addrname2' => Input::get('addrname2'),
			'addrname3' => Input::get('addrname3'),
			'addrstreet' => Input::get('addrstreet'),
			'addrzip' => Input::get('addrzip'),
			'addrcity' => Input::get('addrcity'),
			'addrcountry' => Input::get('addrcountry'),
			'addrregion' => Input::get('addrregion'),
			'contact' => Input::get('contact'),
			'teloffice' => Input::get('teloffice'),
			'telmobile' => Input::get('telmobile'),
			'telprivate' => Input::get('telprivate'),
			'fax' => Input::get('fax'),
			'mailaddr' => Input::get('mailaddr'),
			'radius' => Input::get('radius'),
			'addrinfo' => Input::get('addrinfo'),
			'location' => Input::get('location'),
			'positionx' => $x,
			'positiony' => $y,
			'visible' => Input::get('visible'),
			'addrgrpname' => Input::get('addrgrpname'),
			'addrgrpuid' => Input::get('addrgrpuid'),
			'mapcode' => Input::get('mapcode')
		]));
	}

	public function deleteAddress()
	{
		return View::make('addresses.delete');
	}

	public function deleteAddressPost()
	{
		return Response::json(TomTom::deleteAddress([
				'addrnr' => Input::get('addrnr'),
				'addruid' => Input::get('addruid'),
		]));
	}
}