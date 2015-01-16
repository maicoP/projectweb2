@extends('master.masterview')
@section("title")
	The Ball Of Friendship
@stop
@section("css")
	{{HTML::style("css/bg.css")}}
@stop
@section("content")
	<div class="black_overlay"></div>
	<div class="headerimg">
		<a href="/">{{ HTML::image('css/img/ballheader.png') }}</a>
	</div>
	<div>
		@if(Session::has('message'))
			<p class="success">{{Session::get('message')}}</p>
		@endif
	</div>
	<section>
		<div class="createimg">
		{{ HTML::image('css/img/createbutton.png') }}
		</div>
		<div class="chooseimg">
		{{ HTML::image('css/img/chooseimage.png') }}
		</div>
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
		<div class="trigger"><a href="#" class="btn">Create</a></div>
		<div class="hide">
		@if(!Auth::check())
			<div id="loginpopup" class="btn">Log in</div>
		@else
			<h1>Welcome {{Auth::user()->firstname.' '.Auth::user()->lastname}}</h1>
			<div class="textlink">{{link_to_route('cards.index','My balls of friendship')}}</div>
			<div><a href="logout" class="btn">Logout</a></div>
		@endif
		</div>
		<div class="create">
		<h1>Upload from your computer</h1>
		{{Form::open(['url' => 'image/save', 'files' => true, 'id' => 'form1'])}}
		<div>
			{{ $errors->first('image')}}
		</div>
		<div>


		<label class="myLabel">
					{{Form::label(' ')}}
					{{Form::File('image', ['onchange' => 'this.form.submit();'])}}
					<span class="pointer">{{ HTML::image('css/img/pclogo.png') }}</span>
		</label>

		</div>
		<div class="hiddenform">
			{{ Form::submit('Upload', ['value' => 'Upload'])}}
		</div>
		<div class="orimage">
			{{ HTML::image('css/img/or.png')}}
		</div>
		<h1>Use Facebook</h1>
		<a href="/facebook-images">{{ HTML::image('css/img/fblogo.png') }}</a>
		</div>
	</section>
@stop