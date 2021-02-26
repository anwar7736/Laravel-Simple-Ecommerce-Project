@extends('master')
@section('title', 'Product List')
@section('content')
	<div class="container mt-5 mb-2">
		<div class="row">
			<div class="col-sm-12 col-sm-offset-4">
				<div class="container">
  <h2>Order Amount</h2>
  @php 
  	$charge = 100;
  @endphp           
  <table class="table table-dark">
    <thead>
      <tr>
        <th>Total Amount : </th>
        <td>{{$total}} BDT</td>
      </tr>
    </thead>
    <tbody>
      <tr>
         <th>Delivery Cost : </th>
        <td>{{$charge}} BDT</td>
      </tr>
      <tr>
        <th>Total Cost : </th>
        <td>{{$total+$charge}} BDT</td>
      </tr>
    </tbody>
  </table><br><br>
  @if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<p>{{$error}}</p>
			@endforeach
		</ul>
	</div>
	@elseif($message = Session::has('success'))
		<div class="alert alert-success">
			<p>{{Session::get('success')}}</p>
		</div>
	@endif
  <form action="/payment" method="POST">
  	@csrf	
  	<h5><b>Address : </b></h5>
   <textarea cols="50" rows="2" name="address"></textarea><br><br>
   <h5><b>Select Payment Method : </b></h5>
   <label><input type="radio" name="payment" value="bkash"> Bkash</label><br>
   <label><input type="radio" name="payment" value="paypal"> Paypal</label><br>
   <label><input type="radio" name="payment" value="credit_card"> Credit Card</label><br>
   <label><input type="radio" name="payment" value="cash"> Cash on Delivery</label><br>
  <br>
  <button class="btn btn-sm btn-success">Submit</button>
  </form>
</div>

	</div>
	</div>
	</div>
@endsection