@extends('master.masterview')
@section("title")
	The Ball Of Friendship
@stop
@section("content")
	<div class="headerimg">
	{{ HTML::image('css/img/ballheader.png') }}
	</div>
	<section>
		<div class="createimg">
		{{ HTML::image('css/img/createbutton.png') }}
		</div>
		<div class="chooseimg">
		{{ HTML::image('css/img/chooseimage.png') }}
		</div>
		<div class="trigger"><a href="#" class="btn">Create</a></div>
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
					<span>{{ HTML::image('css/img/pclogo.png') }}</span>
		</label>

		</div>
		<div class="hiddenform">
			{{ Form::submit('Upload', ['value' => 'Upload'])}}
		</div>
		<div class="orimage">
			{{ HTML::image('css/img/or.png')}}
		</div>
		<h1>Use Facebook</h1>
		<a href="facebook/create">{{ HTML::image('css/img/fblogo.png') }}</a>
		</div>
	</section>
@stop