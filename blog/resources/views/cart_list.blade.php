@extends('master')
@section('title', 'Product List')
@section('content')
	<div class="container mt-5 mb-2">
		
		@foreach($carts as $cart)
			<div class="row">
			<div class="col-sm-4">
				<img class="view-image" src="{{URL::to($cart->gallery)}}"/>
			</div>
			<div class="col-sm-4">
				<h3>Name : {{$cart->name}}</h3>
				<h5>Quantity : {{$cart->quantity}} Pcs</h5>
				<h5>Price : {{$cart->price}} BDT</h5>
				<h5>Total : {{$cart->price*$cart->quantity}} BDT</h5>
					
			</div>
			<div class="col-sm-4">
				<a href="/remove_cart/{{$cart->id}}" class="btn btn-sm btn-danger" onClick="return confirm('Are you sure?')">Remove</a>
			</div>
			</div><br><br>

		@endforeach

			<h3>Total Amount : {{$total}} BDT</h3><br>
			<a href="/ordered" class="btn btn-sm btn-info">Order Now</a>
	</div><br>

@endsection