@extends('master.masterview')
@section("title")
	The Ball Of Friendship
@stop
@section("content")
	{{Form::open(['url' => 'image/edit', 'files' => true])}}
	<div>
		{{ $errors->first('image')}}
	</div>
	<div class="imgpreview">
		<img src="/images/{{$img}}" alt="">
		{{Form::hidden('image',$img)}}
	</div>
	{{ HTML::image('css/img/typemessage.png') }}
	<div class="editlabel">
		<h1>Message</h1>
		{{Form::textarea('message','',array('required' => 'required','maxlength' => '40' ,'rows' => 1))}}		
	</div>
	<div class="editlabel fixradio">
		<h1>Font</h1>
	{{Form::radio('font','AlwaysInMyHeart.ttf');}}<div class="font1"></div>
	{{Form::radio('font','Anothershabby_trial.ttf', true);}}<div class="font2"></div>
	{{Form::radio('font','ArchitectsDaughter.ttf');}}<div class="font3"></div><br>
	{{Form::radio('font','AustieBostHappyHolly.ttf');}}<div class="font4"></div>
	{{Form::radio('font','CoalhandLukeTRIAL.ttf');}}<div class="font5"></div>
	{{Form::radio('font','Pleasewritemeasong.ttf');}}<div class="font6"></div> 
	</div>
	<div class="colors">
	<div class="editlabel left fixradiosquare">
		<h1>Font Color</h1>
		<div class="bred"></div>
		<div class="bwhite"></div>
		<div class="bgold"></div>
		<div class="bsilver"></div><br>
		<div class="radiocircle">{{Form::radio('color', '#b22222');}}</div>
		<div class="radiocircle">{{Form::radio('color', '#fffafa', true);}}</div>
		<div class="radiocircle">{{Form::radio('color', '#D4AF37');}}</div>
		<div class="radiocircle">{{Form::radio('color', '#D3D3D3');}}</div>
	</div>
	<div class="editlabel right fixradiosquare">
		<h1>Background Color</h1>
		<div class="bred"></div>
		<div class="bwhite"></div>
		<div class="bgold"></div>
		<div class="bsilver"></div><br>
		<div class="radiocircle">{{Form::radio('background', '#b22222', true);}}</div>
		<div class="radiocircle">{{Form::radio('background', '#fffafa');}}</div>
		<div class="radiocircle">{{Form::radio('background', '#D4AF37');}}</div>
		<div class="radiocircle">{{Form::radio('background', '#D3D3D3');}}</div>
	</div>
	</div>
	<div class="editlabel">
		<h1>Your Name</h1>
		{{Form::text('afzender','',array('required' =>'required','maxlength' => '30'))}}
	</div>

	{{Form::submit('Continue',array('class' =>'btn'))}}
	
@stop