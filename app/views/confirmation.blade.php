@extends('master.masterview')
@section("title")
	The Ball Of Friendship
@stop
@section("content")
	<div class="imgpreview">
		<img src="/images/{{$image}}" alt="result">
	</div>
	{{ HTML::image('css/img/thatsit.png') }}
	<h1>Your ball of friendship will soon be sent to {{$reciever}}!</h1>	
	<h1>
		Want to save your ball or send it to more people? Please
		@if(Auth::check())
			{{Form::open(['url' => '/card/save'])}}
			{{Form::hidden('image',$image)}}
			{{Form::submit('Save your ball of friendship')}}
			{{Form::close()}}
		@else
			{{Link_to('/users/login','login')}}
		@endif
		 to do so.
	</h1>

	 <a href="/" class="btn">Create another one?</a>
@stop