<!doctype html>
<html>
<head>
	<meta charstet="utg-8">
	<title>Test</title>
</head>
<body>
	<h1>Create your card</h1>
	{{Form::open(['url' => 'image/edit', 'files' => true])}}
	<div>
		{{ $errors->first('image')}}
	</div>
	<img src="/images/{{$img}}" alt="">
	{{Form::hidden('image',$img)}}
	<div>
		{{Form::label('Boodschap:')}}
		{{Form::text('message','',array('required' => 'required'))}}		
	</div>

	{{Form::submit()}}
	
</body>
</html>