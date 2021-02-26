@extends('master')
@section('title', 'Product List')
@section('content')
	<div class="container mt-5 mb-2">
		<div class="row">
			<div class="col-sm-12 col-sm-offset-4">
				  <div class="trending-wrapper">
				  	<h3 align="center">Search Products</h3><br>
				  	 @foreach($result as $item)
				   	 <div class="trending-item">
					       <a href="/details/{{$item->id}}"><img class="trending-img" src="{{$item->gallery}}">
					         <h4>{{$item->name}}</h4></a>
				    </div>
				    @endforeach
				  </div>
				</div>

			</div>
		</div>
	</div>
@endsection