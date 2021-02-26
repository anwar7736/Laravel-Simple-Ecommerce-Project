@extends('master')
@section('title', 'Product List')
@section('content')
	<div class="container mt-5 mb-2">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-4">
				<img class="cart-img" src="{{URL::to($details['gallery'])}}"/>
			</div>
			<div class="col-sm-6 col-sm-offset-4">
				<h3>Product : {{$details->name}}</h3>
				<h4>Category : {{$details->category}}</h4>
				<h5>Price : {{$details->price}}.00 BDT</h5>
				<h5>Description : {{$details->description}}</h5><br>
				<form action="/add_to_cart" method="POST">
					@csrf
					<input type="hidden" name="product_id" value="{{$details->id}}">
					Quantity : <input type="number" name="qty" min=1 value="1" style="border:1px solid red"><br><br>
					<button type="submit" class="btn btn-info btn-sm ml-5">Add to Cart</button>
				</form><br>
			</div>
		</div>
	</div>
@endsection