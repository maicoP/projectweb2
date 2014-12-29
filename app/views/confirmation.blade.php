@extends('master.masterview')
@section("title")
	The Ball Of Friendship
@stop
@section("content")
	<div class="imgpreview">
		<img src="/images/{{$images}}" alt="result">
	</div>
	{{ HTML::image('css/img/thatsit.png') }}
	<h1>Your ball of friendship will soon be sent to {{$reciever}}!</h1>

	 <a href="/" class="btn">Create another one?</a>
@stop