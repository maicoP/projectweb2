<!doctype html>
<html>
<head>
	<meta charstet="utg-8">
	<title>Test</title>
</head>
<body>
	{{Link_to('/','Home')}}
	<h1>Maak je geschenk</h1>
	{{Form::open(['url' => 'image/save', 'files' => true])}}
	<div>
		{{ $errors->first('image')}}
	</div>
	<div>
		{{Form::label('Afbeelding')}}
		{{Form::File('image')}}		
	</div>

	{{Form::submit()}}
</body>
</html>