<?php

/**
 * 
 */
class Travel
{
	private $url;


	public function __construct()
	{
		$this->url = 'http://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&key=AIzaSyCkV354O7eacajdMLMweVmA9fAinJgAU8I';
	}

	public function getDistance($origin=null, $destination=null)
	{
		$origin = preg_replace('/\s|\,\s/', '\+', trim($origin));
		$destination = preg_replace('/\s/', '\+', trim($destination));


		$result = $this->url.'&origin='.$origin.'&destinations='.$destination;


	}

}