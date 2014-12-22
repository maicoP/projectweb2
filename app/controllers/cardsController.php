<?php

class cardsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct(Card $card)
	{
		$this->card = $card;

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
			
				$filename = substr_replace(Input::file('image')->getClientOriginalName(),".png",-4);
				$image = Image::make(Input::file('image')->getRealPath())->heighten(300);
				$image->crop(300,300);
				$destenation = 'images/'.$filename;
				$image->save($destenation);		
			}
			return View::make('editImage',['img' => $filename]);
		}
		else
		{
			return Redirect::back()->withInput()->withErrors($this->card->errors);
		}
	}

	public function editTempImage()
	{
			$img = Image::make('images/'.Input::get('image'));
			$img->rectangle(0, 210, 300, 300, function ($draw) {
			    $draw->background('#D4AF37');
			});
			$img->text(Input::get('message'), 150, 220, function($font) {
		    $font->file('fonts/AlwaysInMyHeart.ttf');
		    $font->size(25);
		    $font->color('#D3D3D3');
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


			$newwidth = 300;
			$newheight = 300;

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

			return View::make('result',['img' => Input::get('image')]);
	}


}
