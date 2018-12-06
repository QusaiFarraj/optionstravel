<?php

require_once 'City.php';
require_once 'Travel.php';

function startApp()
{
	var_dump('Starting travel app');
	
	// location means how far the cites from northbrook
	// gas means how much would cost to visit this city on both ways miles * $2 gas price

	// assuming the gas price $2 dollars

// ($name, $miles, $gas, $food, $hotel)
	// cities to visit
	$cities = [
		['northbrook, il', 2, 10, 50],
		['chicago, il', 3, 20, 100],
		['milwakee, wi', 1.8, 4, 55],
		['rockford, il', 1.8, 3, 35]
	];

	var_dump("cities I will be visiting:");

	foreach ($cities as $city) {
		var_dump($city[0]);
	}
	
	// create city object
	$northbrook = new \City($city[0]);
	$chicago = new \City($city[1]);
	$milwakee = new \City($city[2]);
	$rockford = new \City($city[3]);



	// find the most effecnt way to visit all of these citys

	$travel = new \Travel($cities);

}


// start the app
startApp();