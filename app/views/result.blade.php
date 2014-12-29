@extends('master.masterview')
@section("title")
	The Ball Of Friendship
@stop
@section("content")
	<div class="imgpreview">
		<img src="/images/{{$img}}" alt="">
		{{Form::open(['route' =>'cards.store'])}}
	</div>
	{{ HTML::image('css/img/deliver.png') }}
	<h1>Your friend's information</h1>
	<div class="deliveryinfo">
		<div>
			{{Form::hidden('image',$img)}}
			{{Form::hidden('sender',$afzender)}}
		</div>
		<div>
			{{Form::label('ontvanger',"Friend's Name")}}
			{{Form::text('receiver','',array('required' => 'required','placeholder' => "Full name"))}}
		</div>
		<div>
			{{Form::label('straatnaam','Street:')}}
			{{Form::text('streatname','',array('required' => 'required','placeholder' => "Street"))}}
		</div>
		<div>
			{{Form::label('huisnumer','Huisnumer:')}}
			{{Form::text('housnumber','',array('required' => 'required','placeholder' => "House number"))}}
		</div>
		<div>
			{{Form::label('gemeenten','Gemeenten:')}}
			{{Form::text('village','',array('required' => 'required','placeholder' => "Town"))}}
		</div>
		<div>
			{{Form::label('postcode','Postcode:')}}
			{{Form::text('postcode','',array('required' => 'required','placeholder' => "ZIP"))}}
		</div>
		<div>
			{{Form::label('postbus','Postbus:')}}
			{{Form::text('postbus','',array('placeholder' => "PO Box"))}}
		</div>
		<div class="submitinfo">
			{{Form::submit('Send',array('class' =>'btn'))}}
		</div>
		{{Form::close()}}
	</div>
@stop