@extends('master.masterview')
@section("title")
	The Ball Of Friendship
@stop
@section("css")
<style>
	.container{width:975px;}
</style>
@stop
@section("content")
	<a href="/"><div class="indexlink"></div></a>
	<div class="facebookimages">
		<h1>Please select a picture from your Facebook photos.</h1>
		<div>
			{{Form::open([ 'url' => '/facebook/images/save' ])}}
			<div class="nextprevious"><div id='previous'>Previous</div><div id='next'>Next</div></div>
				<div>
					{{Form::hidden('imageURL','',array('id'=>'hiddenField'))}}
				</div>
				<div id='facebookImages'>
				</div>
			{{Form::close()}}
		</div>

		{{HTML::script('js/fb-image.js')}}
	</div>
@stop