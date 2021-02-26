@extends('master')
@section('title', 'Product List')
@section('content')
	<div class="container mt-5 mb-2">
		<div class="row">
			<div class="col-sm-12 col-sm-offset-4">
				<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
				  <ul class="carousel-indicators">
				    <li data-target="#demo" data-slide-to="0" class="active"></li>
				    <li data-target="#demo" data-slide-to="1"></li>
				    <li data-target="#demo" data-slide-to="2"></li>
				  </ul>
				  
				  <!-- The slideshow -->
				  <div class="carousel-inner">
				   @foreach($products as $item)
				   	 <div class="carousel-item {{$item['id']==1?'active':''}}">
					      <img class="slider-img" src="{{$item->gallery}}">
					      <div class="carousel-caption">
					          <h3>{{$item->name}}</h3>
					          <p>{{$item->description}}</p>
				          </div>
				    </div>
				    @endforeach
				  </div>
				  
				  <!-- Left and right controls -->
				  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				    <span class="carousel-control-prev-icon"></span>
				  </a>
				  <a class="carousel-control-next" href="#demo" data-slide="next">
				    <span class="carousel-control-next-icon"></span>
				  </a>
				  <div class="trending-wrapper">
				  	<h3 align="center">Recent products</h3><br>
				  	 @foreach($products as $item)
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