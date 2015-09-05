
<?php

class building
{
	public $name_building = 'new building';
	public $build_cost = 500;
	public $build_ability = array();
	public $gold_upkeep = 50;
	public $production_upkeep = 50;
	public $working_people = 3;
	public $battle_building = true;
	public $wonder_building = true;
	public $happiness_mod = 2;
	public $gold_mod = 50;
	public $production_mod = 50;
	public $growth_mod = .01;
	public $buy_dc = 1;
	public $crime_mod = 1;
	public $tec_needed = 'arcane t1';
}

$testdump = new building;
var_dump($testdump);

?>