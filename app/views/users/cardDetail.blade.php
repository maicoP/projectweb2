@extends('master.masterview')
@section("title")
	The Ball Of Friendship
@stop
@section("content")
	<a href="/"><div class="indexlink"></div></a>
	<div class="balls">
	<h1>Send your ball to another friend</h1><br>
	<section>
		<div>
			<img src="/images/{{$card->image}}" alt="ball of friendship">
		</div>
		<br><h1>Destination</h1>

	</section>
	
	<section>
		{{Form::open(['url' => '/card/addAdress'])}}
			<div>
				{{Form::hidden('cardId',$card->id)}}
			</div>
			<div class="deliveryinfo">
				<div>
					{{Form::label('ontvanger',"Friend's Name")}}
					{{Form::text('owner','',array('required' => 'required','placeholder' => ""))}}
				</div>
				<div>
					{{Form::label('straatnaam','Street:')}}
					{{Form::text('streatname','',array('required' => 'required','placeholder' => ""))}}
				</div>
				<div>
					{{Form::label('huisnumer','Huisnumer:')}}
					{{Form::text('housnumber','',array('required' => 'required','placeholder' => ""))}}
				</div>
				<div>
					{{Form::label('gemeenten','Gemeenten:')}}
					{{Form::text('village','',array('required' => 'required','placeholder' => ""))}}
				</div>
				<div>
					{{Form::label('postcode','Postcode:')}}
					{{Form::text('postcode','',array('required' => 'required','placeholder' => ""))}}
				</div>
				<div>
					{{Form::label('postbus','Postbus:')}}
					{{Form::text('postbus','',array('placeholder' => ""))}}
				</div>
			</div>
			<div class="submitinfo">
				{{Form::submit('Send',array('class' =>'btn'))}}
			</div>
		{{Form::close()}}
	</section>
	</div>
@stop