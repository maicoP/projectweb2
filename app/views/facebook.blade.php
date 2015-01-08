@extends('master.masterview')
@section("title")
	The Ball Of Friendship
@stop
@section("content")
	<h1>Your facebook images</h1>
	<p>Select your image</p>
	<div>
		{{Form::open([ 'url' => '/facebook/images/save' ])}}
			<div>
				{{Form::hidden('imageURL','',array('id'=>'hiddenField'))}}
			</div>
			<div id='facebookImages'>
				
			</div>
		{{Form::close()}}
	</div>

	{{HTML::script('js/fb-image.js')}}
@stop