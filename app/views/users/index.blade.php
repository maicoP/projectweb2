@extends('layouts.default')

@section('content')
	<h1>All Users</h1>
	@if($users->isEmpty())
		<p>no users</p>
	@else
		@foreach($users as $user)
			<li>{{link_to("/users/{$user->username}", $user->username)}}</li>
		@endforeach
	@endif
@stop