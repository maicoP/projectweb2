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
			Please <div class="textlink">{{Link_to('/','login')}}</div> to do so.<br>
		@endif
		<a href="/" class="btn">Create another one?</a>
	</h1>
@stop