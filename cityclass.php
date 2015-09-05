
<?php

class city 
{
	public $name = 'Death Trap of Jhadur';
	public $total_people = 2500;
	public $growth_rate = .01;
	public $city_size = 10;
	//get building info
	public $city_building = array();
	//get troop info
	public $city_location = 'top right';
	//connected to 
	public $city_connected_to = array();
	public $buy_DC = 25;
	public $max_people = 2999;
	public $city_happiness = 'indiffenc';
	//get happiness
	public $people_housed = 500;
}

$testdump = new city;
var_dump($testdump);

?>