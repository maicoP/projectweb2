@extends('master.masterview')
@section("title")
	The Ball Of Friendship
@stop
@section("content")
	<div class="headerimg">
	{{ HTML::image('css/img/ballheader.png') }}
	</div>
	<div>
		@if(Session::has('message'))
			<p class="errors">{{Session::get('message')}}</p>
		@endif
	</div>
		<h1>Log in</h1>
			{{Form::open([ 'url' => '/users/login' ])}}
			<div>
				@if(Session::has('error'))
					<p class="errors">{{Session::get('error')}}</p>
				@endif				
			</div>
		<div class="logininfo">
			<div>
				{{Form::label('email','Email:')}}
				{{Form::email('email','',array('required' => 'required'))}}
			</div>
			<div>
				{{Form::label('password','Password:')}}
				{{Form::password('password','',array('required' => 'required'))}}
			</div>
		</div>
			{{Form::submit('Log in',array('class' =>'btn'))}}

		{{Form::close()}}
		<h1>Register</h1>
		<div class="logininfo">
			{{Form::open([ 'route' => 'users.store' ])}}
			<div>
				{{$errors->first('firstname')}}
				{{$errors->first('lastname')}}
				{{$errors->first('email')}}
				{{$errors->first('password')}}
			</div>
			<div>
				{{Form::label('firstname','First name:')}}
				{{Form::text('firstname','',array('required' => 'required'))}}
			</div>
			<div>
				{{Form::label('lastname','Last name:')}}
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
		</div>
			{{Form::submit('Register',array('class' =>'btn'))}}
		{{Form::close()}}
	</div>
	<h1>Use Facebook</h1>
	<div class="btnfb">{{Link_to_route('facebook.create','Facebook Log In')}}</div>
@stop