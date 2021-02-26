@extends('master')
@section('title', 'Product List')
@section('content')
	<div class="container mt-5 mb-2">
	    <h3>Total Order Amount : {{$total}} BDT</h3><br>
		@foreach($carts as $cart)
			<div class="row">
			<div class="col-sm-4">
				<img class="view-image" src="{{URL::to($cart->gallery)}}"/>
			</div>
			<div class="col-sm-4">
				<h3>Name : {{$cart->name}}</h3>
				<h5>Quantity : {{$cart->quantity}} Pcs</h5>
				<h5>Price : {{$cart->price}} BDT</h5>
				<h5>Status : {{$cart->status}}</h5>
				<h5>Payment : {{$cart->payment_method}}</h5>
				<h5>Total : {{$cart->price*$cart->quantity}} BDT</h5>
			</div>
			</div><br><br>
		@endforeach
	</div><br>

@endsection