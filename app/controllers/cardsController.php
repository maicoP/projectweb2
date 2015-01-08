<?php

class cardsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct(Card $card, Adres $adres)
	{
		$this->card = $card;
		$this->adres = $adres;

	}

	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->card->fill(Input::all());

		$this->adres->fill(Input::all());
		$this->adres->save();
		$adresId = $this->adres->id;

		$this->card->fk_adressid= $adresId;
		$this->card->save();

		return View::make('confirmation',['reciever' =>Input::get('reciever'),'images' => Input::get('image')]);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function createTempImage()
	{
		//
	}

	public function saveTempImage()
	{
		if( $this->card->fill(Input::all())->isValid('add'))
		{
			if(Input::hasFile('image'))
			{
				$filename = $this->saveImage(Input::file('image'),'form');
				return View::make('editImage',['img' => $filename]);	
			}
		}
		else
		{
			return Redirect::back()->withInput()->withErrors($this->card->errors);
		}
	}

	public function saveFacebookImage(){
		$img = Input::get('imageURL');
		$filename = $this->saveImage($img,'facebook');
		return View::make('editImage',['img' => $filename]);
	}

	public function saveImage($img,$type){
		$dimensions = getimagesize($img);
		$with = $dimensions[0];
		$height = $dimensions[1];
		$filename = str_random(15).".png";
		if($with > $height)
		{
			$image =($type == 'facebook' ? Image::make($img)->heighten(400) : Image::make($img->getRealPath())->heighten(400));
			$image->crop(400,400);
		}else{
			$image =($type == 'facebook' ? Image::make($img)->widen(400) : Image::make($img->getRealPath())->widen(400));
			$image->crop(400,400,0,50);
		}
		$destenation = 'images/'.$filename;
		$image->save($destenation);	
		return $filename;
			
	}

	public function editTempImage()
	{
			$size = 0;
			switch (Input::get('font')) {
				case 'AlwaysInMyHeart.ttf':
					$size = 24 ;
					break;
				case 'Anothershabby_trial.ttf':
					$size = 17 ;
					break;
				case 'ArchitectsDaughter.ttf':
					$size = 14 ;
					break;
				case 'AustieBostHappyHolly.ttf':
					$size = 24 ;
					break;
				case 'CoalhandLukeTRIAL.ttf':
					$size = 18 ;
					break;			
				case 'Pleasewritemeasong.ttf':
					$size = 24 ;
					break;
				default:
					$size = 24;
					break;
			}
			$img = Image::make('images/'.Input::get('image'));
			$img->rectangle(0, 290, 400, 400, function ($draw) {
			    $draw->background(Input::get('background'));
			});
			$img->text(Input::get('message'), 200, 300, function($font) use ($size) {
		    $font->file('fonts/'.Input::get('font'));
		    $font->size($size);
		    $font->color(Input::get('color'));
		    $font->align('center');
		    $font->valign('top');
		    $font->angle(0);
			});

			$img->text('Van '.Input::get('afzender'), 200, 330, function($font) use ($size) {
		    $font->file('fonts/'.Input::get('font'));
		    $font->size($size);
		    $font->color(Input::get('color'));
		    $font->align('center');
		    $font->valign('top');
		    $font->angle(0);
			});
			
			$img->save();

			$filename = 'images/'.Input::get('image');


			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if ($ext=="jpg" || $ext=="jpeg") {
			$image_s = imagecreatefromjpeg($filename);
			} else if ($ext=="png") {
			$image_s = imagecreatefrompng($filename);
			}

			$width = imagesx($image_s);
			$height = imagesy($image_s);


			$newwidth = 400;
			$newheight = 400;

			$image = imagecreatetruecolor($newwidth, $newheight);
			imagealphablending($image,true);
			imagecopyresampled($image,$image_s,0,0,0,0,$newwidth,$newheight,$width,$height);

			// create masking
			$mask = imagecreatetruecolor($width, $height);
			$mask = imagecreatetruecolor($newwidth, $newheight);



			$transparent = imagecolorallocate($mask, 255, 0, 0);
			imagecolortransparent($mask, $transparent);



			imagefilledellipse($mask, $newwidth/2, $newheight/2, $newwidth, $newheight, $transparent);



			$red = imagecolorallocate($mask, 0, 0, 0);
			imagecopy($image, $mask, 0, 0, 0, 0, $newwidth, $newheight);
			imagecolortransparent($image, $red);
			imagefill($image,0,0, $red);
			imagepng($image, $filename);

			return View::make('result',['img' => Input::get('image'),'afzender' => Input::get('afzender')]);
	}


}
