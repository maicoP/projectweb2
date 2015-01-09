@extends('master.masterview')
@section("title")
	The Ball Of Friendship
@stop
@section("content")
	<div>
		@if(Session::has('message'))
			<p>{{Session::get('message')}}</p>
		@endif
	</div>
	<div>
		<h2>LogIn</h2>
		{{Form::open([ 'url' => '/users/login' ])}}
			<div>
				@if(Session::has('error'))
					<p>{{Session::get('error')}}</p>
				@endif				
			</div>
			<div>
				{{Form::label('email','Email:')}}
				{{Form::email('email','',array('required' => 'required'))}}
			</div>
			<div>
				{{Form::label('password','Password:')}}
				{{Form::password('password','',array('required' => 'required'))}}
			</div>
			{{Form::submit('LogIn')}}
		{{Form::close()}}
		{{Link_to_route('facebook.create','use facebook')}}
	</div>
	<div>
		<h2>Registreer</h2>
		{{Form::open([ 'route' => 'users.store' ])}}
			<div>
				{{$errors->first('firstname')}}
				{{$errors->first('lastname')}}
				{{$errors->first('email')}}
				{{$errors->first('password')}}
			</div>
			<div>
				{{Form::label('firstname','Firstname:')}}
				{{Form::text('firstname','',array('required' => 'required'))}}
			</div>
			<div>
				{{Form::label('lastname','lastname:')}}
				{{Form::text('lastname','',array('required' => 'required'))}}
			</div>
			<div>
				{{Form::label('email','Email:')}}
				{{Form::email('email','',array('required' => 'required'))}}
			</div>
			<div>
				{{Form::label('password','Password:')}}
				{{Form::password('password','',array('required' => 'required'))}}
			</div>
			{{Form::submit('registreer')}}
		{{Link_to_route('facebook.create','use facebook')}}
		{{Form::close()}}
	</div>
@stop