
<?php

class terrain
{
	public $type_main = 'mountain';
	public $type_minor = 'lake';
	public $coast = true;
	public $river = false;
	public $ruins = true;
	public $wonder = false;
	//'weather funcun'
	public $temperature_mod = 10;
	public $wind_mod = 5;
	public $rain_mod = 1;
	public $defense_bonus = 1;
	public $ranch_mod = 10;
	public $farm_mod = -10;
	public $terain_ability = array();
	
}

$testdump = new terrain;
var_dump($testdump);

?>