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
		{{Form::textarea('message','',array('required' => 'required','maxlength' => '40' ,'rows' => 1))}}		
	</div>
	<div>
		{{Form::label('Lettertype:')}}
		<select name='font'>
		  <option value="AlwaysInMyHeart.ttf">Lettertype 1</option>
		  <option value="Anothershabby_trial.ttf">Lettertype 2</option>
		  <option value="ArchitectsDaughter.ttf">Lettertype 3</option>
		  <option value="AustieBostHappyHolly.ttf">Lettertype 4</option>
		  <option value="CoalhandLukeTRIAL.ttf">Lettertype 5</option>
		  <option value="Pleasewritemeasong.ttf">Lettertype 6</option>
		</select>
	</div>
	<div>
		{{Form::label('Lettertype kleur:')}}
		{{Form::radio('color', '#b22222');}}<span>red</span>
		{{Form::radio('color', '#fffafa', true);}}<span>white</span>
		{{Form::radio('color', '#D4AF37');}}<span>gold</span>
		{{Form::radio('color', '#D3D3D3');}}<span>silver</span>
	</div>
	<div>
		{{Form::label('Achtergrond boodschap:')}}
		{{Form::radio('background', '#b22222', true);}}<span>red</span>
		{{Form::radio('background', '#fffafa');}}<span>white</span>
		{{Form::radio('background', '#D4AF37');}}<span>gold</span>
		{{Form::radio('background', '#D3D3D3');}}<span>silver</span>
	</div>
	<div>
		{{Form::label('afzender','Afzender:')}}
		{{Form::text('afzender','',array('required' =>'required','maxlength' => '30'))}}
	</div>

	{{Form::submit()}}
	
</body>
</html>