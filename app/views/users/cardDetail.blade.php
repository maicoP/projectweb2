@extends('master.masterview')
@section("title")
	The Ball Of Friendship
@stop
@section("content")
	<h1>Your balls of friendship</h1>
	
	<section>
		<div>
			<img src="/images/{{$card->image}}" alt="ball of friendship">
		</div>
		<h2>Destenation addresses</h2>
		@foreach($adress as $adres)
			<h3>To {{$adres->owner}}</h3>
			<p>{{$adres->streatname.' '.$adres->housnumber.' '.$adres->Village.' '.$adres->postcode}}</p>
		@endforeach
	</section>
	
	<section>
		{{Form::open(['url' => '/card/addAdress'])}}
			<div>
				{{Form::hidden('cardId',$card->id)}}
			</div>
			<div>
				{{Form::label('ontvanger',"Friend's Name")}}
				{{Form::text('owner','',array('required' => 'required','placeholder' => "Full name"))}}
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
			{{Form::submit('submit')}}
		{{Form::close()}}
	</section>
@stop