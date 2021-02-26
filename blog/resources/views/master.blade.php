<!DOCTYPE html>
<html>
<head>
	  <title>@yield('title')</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	{{View::make('header')}}
	@yield('content')
	@include('footer')
</body>
<style type="text/css">
	
.custom-form{
	
	padding-top: 100px;
	padding-bottom: 100px;
}
.slider-img	{
	height:500px!important;
	width:1000px!important;
	background-color: black;
}
.carousel-caption{
	background-color: #717b80;
}
.trending-img{
	height:100px;
}
.cart-img{
	height:250px;
}
.view-image{
	height: 140px;
}
.trending-item	{
	float:left;
	margin-bottom: 20px;
	border: 2px solid green;
	margin-left: 20px;
	padding: 13px;
}
.trending-wrapper{

}

</style>
</html>