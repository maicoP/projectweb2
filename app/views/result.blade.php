@extends('master.masterview')
@section("title")
	The Ball Of Friendship
@stop
@section("content")
	<a href="/"><div class="indexlink"></div></a>
	<div class="imgpreview">
		<img src="/images/{{$img}}" alt="">
		{{Form::open(['route' =>'cards.store'])}}
	</div>
	{{ HTML::image('css/img/deliver.png') }}
	<h1>Your friend's information</h1><br>
	<div class="deliveryinfo">
		<div>
			{{Form::hidden('image',$img)}}
			{{Form::hidden('sender',$afzender)}}
		</div>
		<div>
			{{Form::label('ontvanger',"Full Name: ")}}
			{{Form::text('owner','',array('required' => 'required'))}}
		</div>
		<div>
			{{Form::label('straatnaam','Street:')}}
			{{Form::text('streatname','',array('required' => 'required'))}}
		</div>
		<div>
			{{Form::label('huisnumer','House Number:')}}
			{{Form::text('housnumber','',array('required' => 'required'))}}
		</div>
		<div>
			{{Form::label('gemeenten','Town:')}}
			{{Form::text('village','',array('required' => 'required'))}}
		</div>
		<div>
			{{Form::label('postcode','ZIP Code:')}}
			{{Form::text('postcode','',array('required' => 'required'))}}
		</div>
		<div>
			{{Form::label('postbus','PO Box:')}}
			{{Form::text('postbus')}}
		</div>
	</div>
	<div class="submitinfo">
		{{Form::submit('Send',array('class' =>'btn'))}}
	</div>
		{{Form::close()}}

@stop