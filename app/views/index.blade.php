<!doctype html>
<html>
<head>
	<meta charstet="utg-8">
	<title>Test</title>
</head>
<body>
	<h1>Matthias Loves Balls</h1>

	<section>
		<h2>Make your card</h2>
		{{Link_to('/','Home')}}
		{{Form::open(['url' => 'image/save', 'files' => true])}}
		<div>
			{{ $errors->first('image')}}
		</div>
		<div>
			{{Form::label('Afbeelding')}}
			{{Form::File('image')}}		
		</div>
		<a href="facebook/create">Take a picture from facebook</a>
		{{Form::submit()}}
	</section>

</body>
</html>
