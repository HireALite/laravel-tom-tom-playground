<?php

class VehicleController extends BaseController
{
	public function report()
	{
		return Response::json(TomTom::showVehicleReport());
	}
}