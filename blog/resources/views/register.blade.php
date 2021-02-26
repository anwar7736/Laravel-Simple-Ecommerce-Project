@extends('master')
@section('title', 'Register')
@section('content')
	<div class="container mt-2 mb-2">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<form action="/register" method="POST" class="custom-form">
					@if($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
								<p>{{$error}}</p>
							@endforeach
						</ul>
					</div>
					@elseif(Session::has('error'))
						 <div class="alert alert-danger">
						 	<p>{{Session::get('error')}}</p>
						 </div>
					@endif
					  @csrf
					  <div class="form-group">
					    <label for="exampleInputEmail1">Name</label>
					    <input type="text" class="form-control" name="name" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="text" class="form-control" name="email" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" name="password" placeholder="Password">
					  </div>
					 
					  <button type="submit" class="btn btn-info">Register</button>
				</form>
			</div>
		</div>
	</div>
@endsection