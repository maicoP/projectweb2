@extends('master.masterview')
@section("title")
	The Ball Of Friendship
@stop
@section("content")
	<a href="/"><div class="indexlink"></div></a>
	
	<div class="balls">
	<h1>Your balls of friendship</h1><br>
	
	<section>
		@forelse($cards as $card)
		<div class="ball hvr-grow-rotate">
			<a href="cards/{{$card->id}}">
				<img width="340" height="340" src="images/{{$card->image}}" alt="ball of friendship">
			</a>		
		</div>
		@empty
		@endforelse	
	</section>
	</div>
	
@stop