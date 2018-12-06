<?php

/**
 * 
 */
class City
{
	private $name;
	private $miles; // miles the city away from the start point
	private $gas; // gas price in the city
	private $food; // food cost at the city
	private $hotel; // hotel cost at the city

	public function __construct(array $city)
	{
		$this->name = $city[0];
		$this->miles = $city[1];
		$this->gas = $city[2];
		$this->food = $city[3];
		$this->hotel = $city[4];
	}


	// gettets
	public function getName()
	{
		return $this->name;
	}
	public function getMiles()
	{
		return $this->miles;
	}
	public function getGas()
	{
		return $this->gas;
	}
	public function getFood()
	{
		return $this->food;
	}
	public function getHotel()
	{
		return $this->hotel;
	}


	// setters
	public function setName($name)
	{
		$this->name = $name;
	}
	public function setMiles($miles)
	{
		$this->miles = $miles;
	}
	public function setGas($gas)
	{
		return $this->gas = $gas;
	}
	public function setFood($food)
	{
		return $this->food = $food;
	}
	public function setHotel($hotel)
	{
		return $this->hotel = $hotel;
	}


	// untils
	public function getGasCost()
	{
		return $this->gas * $this->miles;
	}
}
