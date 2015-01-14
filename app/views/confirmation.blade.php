@extends('master.masterview')
@section("title")
	The Ball Of Friendship
@stop
@section("content")
	<a href="/"><div class="indexlink"></div></a>
	<div class="imgpreview">
		<img src="/images/{{$image}}" alt="result">
	</div>
	{{ HTML::image('css/img/thatsit.png') }}
	<h1>Your ball of friendship will soon be sent to {{$reciever}}!</h1>	
	<h1>
		Want to save your ball or send it to more people? <br>
		@if(Auth::check())<br>
			{{Form::open(['url' => '/card/save'])}}
			{{Form::hidden('image',$image)}}
			{{Form::submit('Save your ball of friendship',array("class" => "btn"))}}
			{{Form::close()}}
		@else
			Please <div id="loginpopup" class="textlink">login</div> to do so.<br>
		@endif
		<a href="/" class="btn">Create another one?</a>
	</h1>
	<div class="black_overlay"></div>
	<div id="popup">
		<div id="closepopup"></div>
		<div id="logincontent">
				<h1>Log in</h1><br>
					{{Form::open([ 'url' => '/users/login' ])}}
					<div class='errorsLogin'>
						@if(Session::has('error'))
							<p class="errors">{{Session::get('error')}}</p>
						@endif				
					</div>
				<div class="logininfo">
					{{Form::hidden('image',$image)}}
					{{Form::hidden('reciever',$reciever)}}
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
				<div>
					{{ HTML::image('css/img/s_or.png')}}
				</div>
				<div id="register" class="btn">Register</div>
				<div>
					{{ HTML::image('css/img/s_or.png')}}
				</div>
				<div class="btnfb">{{Link_to_route('facebook.create','Facebook')}}</div>				
		</div>
		<div id="registercontent">
			<h1>Register</h1><br>
				{{Form::open([ 'route' => 'users.store' ])}}
				<div class="errors errorsRegistratie">
						@if(!$errors->isEmpty())
							<p>
								{{$errors->first('firstname')}}
								{{$errors->first('lastname')}}
								{{$errors->first('email')}}
								{{$errors->first('password')}}
							</p>
						@endif
					</div>
			<div class="logininfo">
				{{Form::hidden('image',$image)}}
				{{Form::hidden('reciever',$reciever)}}
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
				<div>
					{{ HTML::image('css/img/s_or.png')}}
				</div>
			<div class="btnfb">{{Link_to_route('facebook.create','Facebook')}}</div>
		</div>
	</div>
@stop