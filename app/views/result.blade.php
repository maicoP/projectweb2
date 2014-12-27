<!doctype html>
<html>
<head>
	<meta charstet="utg-8">
	<title>Test</title>
</head>
<body>
	
	<h1>Result</h1>
	<img src="/images/{{$img}}" alt="">
	{{Form::open(['route' =>'cards.store'])}}
	<h2>Adress</h2>
	<div>
		{{Form::hidden('image',$img)}}
		{{Form::hidden('sender',$afzender)}}
	</div>
	<div>
		{{Form::label('ontvanger','Naam van de ontvanger:')}}
		{{Form::text('receiver','',array('required' => 'required'))}}
	</div>
	<div>
		{{Form::label('straatnaam','Straatnaam:')}}
		{{Form::text('streatname','',array('required' => 'required'))}}
	</div>
	<div>
		{{Form::label('huisnumer','Huisnumer:')}}
		{{Form::text('housnumber','',array('required' => 'required'))}}
	</div>
	<div>
		{{Form::label('gemeenten','Gemeenten:')}}
		{{Form::text('village','',array('required' => 'required'))}}
	</div>
	<div>
		{{Form::label('postcode','Postcode:')}}
		{{Form::text('postcode','',array('required' => 'required'))}}
	</div>
	<div>
		{{Form::label('postbus','Postbus:')}}
		{{Form::text('postbus')}}
	</div>
	{{Form::submit('Verzend jou ball of friendship')}}
	{{Form::close()}}
</body>
</html>