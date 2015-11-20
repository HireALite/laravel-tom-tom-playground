@extends("layout")

@section("html")
	<h4>Vehicles</h4>
	<ul>
		<li><a href="/showVehiclesReport">Show Vehicle Report</a><br/></li>
	</ul>

	<h4>Orders</h4>
	<ul>
		<li><a href="/sendOrder">Send Order</a><br/></li>
		<li><a href="/sendOrderDestination">Send Order w/ Destination</a><br/></li>
	</ul>

	<h4>Addresses</h4>
	<ul>
		<li><a href="/showAddressReport">Show Address Report</a></li>
		<li><a href="/createAddress">Create Address</a><br/></li>
		<li><a href="/deleteAddress">Delete Address</a><br/></li>
	</ul>
@stop