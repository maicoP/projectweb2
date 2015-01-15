@extends('master.masterview')
@section("title")
	The Ball Of Friendship
@stop
@section("content")
	<a href="/"><div class="indexlink"></div></a>
	<div class="editimgbg"></div>
	<div class='editimgextra'></div>
	<div class="editimgmask"></div>
	<div class="edittext">Your message</div>
	<div class="editfrom">From </div>
	{{Form::open(['url' => 'image/edit', 'files' => true])}}
	<div>
		{{ $errors->first('image')}}
	</div>
	<div class="imgpreview">
		<img src="/images/{{$img}}" class="editimg" alt="">
		{{Form::hidden('image',$img)}}
	</div>
	{{ HTML::image('css/img/typemessage.png') }}
	<div class="editlabel">
		<h1>Message</h1>
		{{Form::textarea('message','',array('required' => 'required','id' => 'message','maxlength' => '27' ,'rows' => 1))}}		
	</div>
	<div class="hideradio editlabel fixradio">
		<h1>Font</h1>
	<label id="font1">{{Form::radio('font','BadScript-Regular.ttf',true);}}<img src="../../css/img/font1.png"></label>
	<label id="font2">{{Form::radio('font','ComingSoon.ttf');}}<img src="../../css/img/font2.png"></label>
	<label id="font3">{{Form::radio('font','Courgette-Regular.ttf');}}<img src="../../css/img/font3.png"></label>
	<label id="font4">{{Form::radio('font','DancingScript-Regular.ttf');}}<img src="../../css/img/font4.png"></label>
	<label id="font5">{{Form::radio('font','JustAnotherHand.ttf');}}<img src="../../css/img/font5.png"></label>
	<label id="font6">{{Form::radio('font','MarckScript-Regular.ttf');}}<img src="../../css/img/font6.png"> </label>
	<label id="font7">{{Form::radio('font','Poly-Regular.ttf');}}<img src="../../css/img/font7.png"> </label>
	<label id="font8">{{Form::radio('font','Quicksand-Regular.ttf');}}<img src="../../css/img/font8.png"> </label>
	</div>
	<div class="colors">
		<div class="hideradio editlabel left fixradiosquare">
			<h1>Font Color</h1>
			<label id="editfontred">{{Form::radio('color', '#b22222');}}<img src="../../css/img/red.png"></label>
			<label id="editfontgreen">{{Form::radio('color', '#b22222');}}<img src="../../css/img/green.png"></label>
			<label id="editfontwhite">{{Form::radio('color', '#fffafa', true);}}<img src="../../css/img/white.png"></label>
			<label id="editfontgold">{{Form::radio('color', '#D4AF37');}}<img src="../../css/img/gold.png"></label>
			<label id="editfontsilver">{{Form::radio('color', '#D3D3D3');}}<img src="../../css/img/silver.png"></label>
		</div>
		<div class="hideradio editlabel right fixradiosquare">
			<h1>Background Color</h1>
			<label id="editbgred">{{Form::radio('background', '#b22222',true);}}<img src="../../css/img/red.png"></label>
			<label id="editbggreen">{{Form::radio('background', '#6FAA8C');}}<img src="../../css/img/green.png"></label>
			<label id="editbgwhite">{{Form::radio('background', '#fffafa');}}<img src="../../css/img/white.png"></label>
			<label id="editbggold">{{Form::radio('background', '#D4AF37');}}<img src="../../css/img/gold.png"></label>
			<label id="editbgsilver">{{Form::radio('background', '#D3D3D3');}}<img src="../../css/img/silver.png"></label>
		</div>
	</div>
	<div class="hideradio extraImage">
		<h1>Extras</h1>
		<label>{{Form::radio('extra','none',true)}} <img src="../../backgrounds/p_none.png"></label>
		<label>{{Form::radio('extra','candy.png')}} <img src="../../backgrounds/p_candy.png"></label>
		<label>{{Form::radio('extra','roundedborder.png')}} <img src="../../backgrounds/p_roundedborder.png"></label>
		<label>{{Form::radio('extra','santa.png')}} <img src="../../backgrounds/p_santa.png"></label>
		<label>{{Form::radio('extra','versiering.png')}} <img src="../../backgrounds/p_versiering.png"></label>
	</div>
	<div class="editlabel clear">
		<h1>Your Name</h1>
		{{Form::text('afzender','',array('required' =>'required','maxlength' => '30','id' => 'textFrom'))}}
	</div>

	{{Form::submit('Continue',array('class' =>'btn'))}}
	
@stop