@extends('master.masterview')
@section("title")
	The Ball Of Friendship
@stop
@section("content")
	<h1>Your balls of friendship</h1>
	
	<section>
		@forelse($cards as $card)
		<div>
			<a href="cards/{{$card->id}}">
				<img src="images/{{$card->image}}" alt="ball of friendship">
			</a>		
		</div>
		@empty
		@endforelse	
	</section>
	
@stop