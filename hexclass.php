
<?php

class hexes
{
	public $top_city_name = 'top';
	public $top_building = array();
	public $bottom_city_name = 'top';
	public $bottom_building = array();
	public $topright_city_name = 'top';
	public $topright_building = array();
	public $topleft_city_name = 'top';
	public $topleft_building = array();
	public $bottomright_city_name = 'top';
	public $bottomright_building = array();
	public $bottomleft_city_name = 'top';
	public $bottomleft_building = array();
	public $middle_city_name = 'top';
	public $middle_building = array();
	public $hex_row = 1;
	public $hex_column =1;
	public $terrain_type = 'planes';
	public $scouted = false;
	public $explored = false;
	public $explored_mine =false;
	// get abibly
	// get city
	// get troops
	public $hex_building = array();
	public $hex_ability = array();
	public $hex_troops = 0;
}

$testdump = new hexes;
var_dump($testdump);

?>